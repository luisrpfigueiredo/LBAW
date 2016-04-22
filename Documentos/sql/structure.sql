
CREATE TABLE answers (
    id SERIAL,
    user_id integer,
    question_id integer NOT NULL,
    body text NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone
);

CREATE TABLE bans (
    id SERIAL,
    user_id integer NOT NULL,
    creator_id integer,
    notes text,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    expired_at timestamp(0) without time zone,
    CONSTRAINT bans_user_id_check_not_self CHECK ((user_id <> creator_id))
);

CREATE TABLE follows (
    user_id integer NOT NULL,
    followed_id integer NOT NULL,
    CONSTRAINT follows_user_ckeck_notself CHECK ((user_id <> followed_id))
);

CREATE TABLE password_resets (
    user_id integer NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL
);

CREATE TABLE questions (
    id SERIAL,
    user_id integer,
    title character varying(100) NOT NULL,
    body text NOT NULL,
    solved boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone
);

CREATE TABLE questions_tags (
    question_id integer NOT NULL,
    tag_id integer NOT NULL
);

CREATE TABLE tags (
    id SERIAL,
    tag character varying(10) NOT NULL
);

CREATE TABLE users (
    id SERIAL,
    username character varying(50) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(256) NOT NULL,
    type character varying(10) DEFAULT 'user'::character varying NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    CONSTRAINT users_type_check_in_enum CHECK (((type)::text = ANY ((ARRAY['user'::character varying, 'mod'::character varying, 'admin'::character varying])::text[])))
);

CREATE TABLE votes (
    user_id integer NOT NULL,
    votable_id integer NOT NULL,
    votable_type character(1) NOT NULL,
    value boolean NOT NULL,
    CONSTRAINT votes_votable_type_check_in_enum CHECK ((votable_type = ANY (ARRAY['q'::bpchar, 'a'::bpchar])))
);

CREATE TABLE warnings (
    id SERIAL,
    user_id integer NOT NULL,
    creator_id integer,
    notes text,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    CONSTRAINT warnings_user_id_notself CHECK ((creator_id <> user_id))
);

ALTER TABLE ONLY password_resets
    ADD CONSTRAINT password_resets_token_key UNIQUE (token);


ALTER TABLE ONLY answers
    ADD CONSTRAINT pk_answers PRIMARY KEY (id);

ALTER TABLE ONLY bans
    ADD CONSTRAINT pk_bans PRIMARY KEY (id);

ALTER TABLE ONLY follows
    ADD CONSTRAINT pk_follows PRIMARY KEY (user_id, followed_id);

ALTER TABLE ONLY password_resets
    ADD CONSTRAINT pk_passwords PRIMARY KEY (user_id);

ALTER TABLE ONLY questions
    ADD CONSTRAINT pk_questions PRIMARY KEY (id);

ALTER TABLE ONLY questions_tags
    ADD CONSTRAINT pk_questions_tags PRIMARY KEY (question_id, tag_id);

ALTER TABLE ONLY tags
    ADD CONSTRAINT pk_tags PRIMARY KEY (id);

ALTER TABLE ONLY users
    ADD CONSTRAINT pk_users PRIMARY KEY (id);

ALTER TABLE ONLY warnings
    ADD CONSTRAINT pk_warnings PRIMARY KEY (id);

ALTER TABLE ONLY tags
    ADD CONSTRAINT tags_tag_key UNIQUE (tag);

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_key UNIQUE (email);

ALTER TABLE ONLY users
    ADD CONSTRAINT users_username_key UNIQUE (username);

ALTER TABLE ONLY votes
    ADD CONSTRAINT votes_votable_key UNIQUE (user_id, votable_id, votable_type);

CREATE INDEX ixfk_answers_questions ON answers USING btree (question_id);

CREATE INDEX ixfk_answers_users ON answers USING btree (user_id);

CREATE INDEX ixfk_bans_users ON bans USING btree (user_id);

CREATE INDEX ixfk_bans_users_02 ON bans USING btree (creator_id);

CREATE INDEX ixfk_follows_users ON follows USING btree (user_id);

CREATE INDEX ixfk_follows_users_02 ON follows USING btree (followed_id);

CREATE INDEX ixfk_password_resets_users ON password_resets USING btree (user_id);

CREATE INDEX ixfk_questions_tags_tags ON questions_tags USING btree (tag_id);

CREATE INDEX ixfk_questions_users ON questions USING btree (user_id);

CREATE INDEX ixfk_votes_users ON votes USING btree (user_id);

CREATE INDEX ixfk_warnings_users ON warnings USING btree (user_id);

CREATE INDEX ixfk_warnings_users_02 ON warnings USING btree (creator_id);

ALTER TABLE ONLY answers
    ADD CONSTRAINT fk_answers_questions FOREIGN KEY (question_id) REFERENCES questions(id) ON DELETE RESTRICT;

ALTER TABLE ONLY answers
    ADD CONSTRAINT fk_answers_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL;

ALTER TABLE ONLY bans
    ADD CONSTRAINT fk_bans_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE;

ALTER TABLE ONLY bans
    ADD CONSTRAINT fk_bans_users_02 FOREIGN KEY (creator_id) REFERENCES users(id) ON DELETE SET NULL;

ALTER TABLE ONLY follows
    ADD CONSTRAINT fk_follows_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE;

ALTER TABLE ONLY follows
    ADD CONSTRAINT fk_follows_users_02 FOREIGN KEY (followed_id) REFERENCES users(id) ON DELETE CASCADE;
	
ALTER TABLE ONLY password_resets
    ADD CONSTRAINT fk_password_resets_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE;

ALTER TABLE ONLY questions_tags
    ADD CONSTRAINT fk_questions_tags_questions FOREIGN KEY (question_id) REFERENCES questions(id) ON DELETE CASCADE;

ALTER TABLE ONLY questions_tags
    ADD CONSTRAINT fk_questions_tags_tags FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE RESTRICT;

ALTER TABLE ONLY questions
    ADD CONSTRAINT fk_questions_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL;

ALTER TABLE ONLY votes
    ADD CONSTRAINT fk_votes_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE;

ALTER TABLE ONLY warnings
	ADD CONSTRAINT fk_warnings_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE;

ALTER TABLE ONLY warnings
    ADD CONSTRAINT fk_warnings_users_02 FOREIGN KEY (creator_id) REFERENCES users(id) ON DELETE SET NULL;
	
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
	RETURN NULL;
END;
$func$  LANGUAGE plpgsql;

CREATE FUNCTION trigger_update_question_timestamp_from_vote()
  RETURNS "trigger" AS $func$
BEGIN

	IF TG_OP = 'DELETE' THEN
		IF OLD.votable_type = 'q' THEN
			UPDATE questions SET updated_at = now() WHERE id=OLD.votable_id;
		END IF;
		RETURN NULL;
	END IF;
	
	IF NEW.votable_type = 'q' THEN
		UPDATE questions SET updated_at = now() WHERE id=NEW.votable_id;
	END IF;
	RETURN NULL;
END;
$func$  LANGUAGE plpgsql;

CREATE TRIGGER answer_update_question_timestamp AFTER INSERT OR UPDATE ON answers 
   FOR EACH ROW EXECUTE PROCEDURE trigger_update_question_timestamp();
   
CREATE TRIGGER votes_update_question_timestamp AFTER INSERT OR UPDATE ON votes 
	FOR EACH ROW EXECUTE PROCEDURE trigger_update_question_timestamp_from_vote();
	
ALTER TABLE answers ADD COLUMN vote_rating INTEGER DEFAULT 0;

CREATE FUNCTION trigger_update_answer_rating()
  RETURNS "trigger" AS $func$
BEGIN
	IF TG_OP = 'DELETE' THEN
		IF OLD.votable_type = 'a' THEN
			UPDATE answers SET vote_rating = votable_rating(OLD.votable_id, 'a') WHERE id=OLD.votable_id;
		END IF;
		RETURN NULL;
	END IF;
	
	IF NEW.votable_type = 'a' THEN
		UPDATE answers SET vote_rating = votable_rating(NEW.votable_id, 'a') WHERE id=NEW.votable_id;
	END IF;
	RETURN NULL;
END;
$func$  LANGUAGE plpgsql;

CREATE FUNCTION trigger_update_answer_timestamp()
  RETURNS "trigger" AS $func$
BEGIN
	IF TG_OP != 'INSERT' and OLD.updated_at != NEW.updated_at THEN
		UPDATE answers SET updated_at = now() WHERE id = NEW.id;
	END IF;
	RETURN NULL;
END;
$func$  LANGUAGE plpgsql;


CREATE TRIGGER votes_update_answer_rating AFTER INSERT OR DELETE OR UPDATE ON votes FOR EACH ROW EXECUTE PROCEDURE trigger_update_answer_rating();
CREATE TRIGGER update_answer_timestamp AFTER UPDATE ON answers FOR EACH ROW EXECUTE PROCEDURE trigger_update_answer_timestamp();
CREATE INDEX questions_question_search_idx ON questions USING gin(to_tsvector('english', coalesce(title,'') || ' ' || coalesce(body,'')));
CREATE INDEX answers_question_search_idx ON answers USING gin(to_tsvector('english', body));

CREATE OR REPLACE FUNCTION search_questions(psearch text)
RETURNS TABLE (question_id INTEGER) AS $func$
BEGIN
	return QUERY
		SELECT DISTINCT(questions.id)
		FROM questions INNER JOIN answers ON questions.id = answers.question_id
		WHERE to_tsvector(coalesce(title,'') || ' ' || coalesce(body,'')) @@ to_tsquery(psearch)
			OR to_tsvector(answers.body) @@ to_tsquery(psearch);
END
$func$  LANGUAGE plpgsql;

CREATE INDEX users_username ON users USING hash(username);
CREATE INDEX users_email ON users USING hash(email);

CREATE INDEX votes_votable_id ON votes USING hash(votable_id);
CREATE INDEX votes_votable_type ON votes USING hash(votable_type);

CREATE INDEX answers_vote_rating ON answers USING btree(vote_rating);
CREATE INDEX questions_updated_at ON questions USING btree(updated_at);

CREATE OR REPLACE FUNCTION votable_rating(pvotable_id int, pvotable_type character)
RETURNS INTEGER AS $func$
DECLARE vrating INTEGER;
BEGIN
	SELECT COUNT(*) INTO vrating FROM votes WHERE votes.votable_id = pvotable_id AND votes.votable_type = pvotable_type AND votes.value=true;
	SELECT (vrating-COUNT(*)) INTO vrating FROM votes WHERE votes.votable_id = pvotable_id AND votes.votable_type = pvotable_type AND votes.value=false;

	return vrating;
END
$func$  LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION question_tags(pquestion_id int)
RETURNS TABLE (tag character varying(10)) AS $func$
BEGIN
	return QUERY
		SELECT tags.tag
		FROM tags INNER JOIN questions_tags ON tags.id = questions_tags.tag_id
		WHERE questions_tags.question_id = pquestion_id;
END
$func$  LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION question_answers(pquestion_id int)
RETURNS TABLE (
    id INTEGER, 
    user_id INTEGER,
	username character varying(50),
	body TEXT,
	created_at timestamp,
	votes_rating INT
    ) AS $func$
BEGIN
	RETURN QUERY
      SELECT answers.id, answers.user_id, users.username, answers.body, answers.created_at, votable_rating(answers.id, 'a')
      FROM answers RIGHT JOIN users ON answers.user_id = users.id
      WHERE answers.question_id = pquestion_id;
END
$func$  LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION user_questions(puser_id int)
RETURNS TABLE (
    id INTEGER, 
	title character varying(100),
	body TEXT,
	solved boolean,
	created_at timestamp,
	updated_at timestamp,
	votes_rating INT,
	count_answers BIGINT
	
    ) AS $func$
BEGIN
	RETURN QUERY
      SELECT questions.id, questions.title, questions.body, questions.solved, questions.created_at, questions.updated_at, votable_rating(questions.id, 'q'), (SELECT COUNT(*) FROM answers WHERE question_id = questions.id)
      FROM questions
      WHERE questions.user_id = puser_id;
END
$func$  LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION number_users_following(puser_id int)
RETURNS INTEGER AS $func$
DECLARE vcount INTEGER;
BEGIN
	SELECT COUNT(*) INTO vcount FROM follows WHERE follows.followed_id = puser_id;
	
	return vcount;
END
$func$  LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION number_users_followed_by(puser_id int)
RETURNS INTEGER AS $func$
DECLARE vcount INTEGER;
BEGIN
	SELECT COUNT(*) INTO vcount FROM follows WHERE follows.user_id = puser_id;
	
	return vcount;
END
$func$  LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION count_vote_rating_received_user(puser_id int)
RETURNS INTEGER AS $func$
DECLARE vquestionsCount INTEGER;
DECLARE vanswersCount INTEGER;
BEGIN
	SELECT SUM(votable_rating(questions.id, 'q')) INTO vquestionsCount FROM questions WHERE questions.user_id = puser_id;
	SELECT SUM(votable_rating(answers.id, 'a')) INTO vanswersCount FROM answers WHERE answers.user_id = puser_id;
	
	return vquestionsCount + vanswersCount;
END
$func$  LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION user_profile(puser_id int)
RETURNS TABLE (
    username character varying(50), 
	email character varying(100),
	type character varying(10),
	created_at timestamp,
	count_users_that_im_following INT,
	count_number_followers INT,
	count_questions BIGINT,
	count_answers BIGINT,
	count_votes_made BIGINT,
	count_votes_rating_received INT
    ) AS $func$
BEGIN
	RETURN QUERY
      SELECT users.username, users.email, users.type, users.created_at, 
		number_users_followed_by(puser_id), 
		number_users_following(puser_id),
		(SELECT COUNT(*) FROM questions WHERE questions.user_id = puser_id),
		(SELECT COUNT(*) FROM answers WHERE answers.user_id = puser_id),
		(SELECT COUNT(*) FROM votes WHERE votes.user_id = puser_id),
		count_vote_rating_received_user(puser_id)
      FROM users
      WHERE users.id = puser_id;
END
$func$  LANGUAGE plpgsql;
