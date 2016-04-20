CREATE FUNCTION trigger_auto_ban_on_warning_limit()
  RETURNS "trigger" AS $func$
BEGIN
   IF (SELECT COUNT(*) FROM warnings WHERE warnings.user_id = NEW.user_id) = 5 THEN 
      INSERT INTO bans (user_id, creator_id, notes) VALUES(NEW.user_id, NULL, 'Automatic ban for warning limit 5 reached');
   END IF;
   RETURN NULL;
END;
$func$  LANGUAGE plpgsql;

CREATE TRIGGER auto_ban_on_warning_limit AFTER INSERT ON warnings 
   FOR EACH ROW EXECUTE PROCEDURE trigger_auto_ban_on_warning_limit();
   
CREATE FUNCTION trigger_update_question_timestamp()
  RETURNS "trigger" AS $func$
BEGIN
	UPDATE questions SET updated_at = now() WHERE id = NEW.question_id;
END;
$func$  LANGUAGE plpgsql;

CREATE FUNCTION trigger_update_question_timestamp_from_vote()
  RETURNS "trigger" AS $func$
DECLARE vquestion_id INT;
BEGIN
	IF NEW.votable_type = 'q' THEN
		vquestion_id := NEW.votable_id;
	ELSE
		SELECT question_id INTO vquestion_id FROM answers WHERE id = NEW.votable_id;
	END IF;
	
	UPDATE questions SET updated_at = now() WHERE id = new.votable_id;
	RETURN NULL;
END;
$func$  LANGUAGE plpgsql;

CREATE TRIGGER answer_update_question_timestamp AFTER INSERT ON answers 
   FOR EACH ROW EXECUTE PROCEDURE trigger_update_question_timestamp();
   
CREATE TRIGGER votes_update_question_timestamp AFTER INSERT OR UPDATE ON votes 
	FOR EACH ROW EXECUTE PROCEDURE trigger_update_question_timestamp_from_vote();
	
	
	
ALTER TABLE answers ADD COLUMN vote_rating INTEGER;
UPDATE answers SET vote_rating = votable_rating(answers.id, 'a');

CREATE FUNCTION trigger_update_answer_rating()
  RETURNS "trigger" AS $func$
BEGIN
	IF TG_OP = 'DELETE' THEN
		IF OLD.votable_type = 'a' THEN
			UPDATE answers SET vote_rating = votable_rating(OLD.votable_id, 'a'), updated_at = now() WHERE id=OLD.votable_id;
		ELSE
			UPDATE answers SET updated_at = now() WHERE id = OLD.votable_id;
		END IF;
		RETURN NULL;
	END IF;
	
	IF NEW.votable_type = 'a' THEN
		UPDATE answers SET vote_rating = votable_rating(NEW.votable_id, 'a'), updated_at = now() WHERE id=NEW.votable_id;
	ELSE
		UPDATE answers SET updated_at = now() WHERE id = OLD.votable_id;
	END IF;
	RETURN NULL;
END;
$func$  LANGUAGE plpgsql;

CREATE TRIGGER votes_update_answer_rating AFTER INSERT OR DELETE OR UPDATE ON votes FOR EACH ROW EXECUTE PROCEDURE trigger_update_answer_rating();