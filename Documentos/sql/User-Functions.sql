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