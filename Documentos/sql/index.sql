CREATE INDEX questions_question_search_idx ON questions USING gin(to_tsvector('english', coalesce(title,'') || ' ' || coalesce(body,'')));
CREATE INDEX answers_question_search_idx ON answers USING gin(to_tsvector('english', body));

CREATE OR REPLACE FUNCTION search_questions(psearch text)
RETURNS TABLE (question_id INTEGER) AS $func$
BEGIN
	return QUERY
		SELECT DISTINCT(questions.id)
		FROM questions INNER JOIN answers ON questions.id = answers.question_id
		WHERE to_tsvector(coalesce(questions.title,'') || ' ' || coalesce(questions.body,'')) @@ to_tsquery(psearch)
			OR to_tsvector(answers.body) @@ to_tsquery(psearch);
END
$func$  LANGUAGE plpgsql;

CREATE INDEX users_username ON users USING hash(username);
CREATE INDEX users_email ON users USING hash(email);

CREATE INDEX votes_votable_id ON votes USING hash(votable_id);
CREATE INDEX votes_votable_type ON votes USING hash(votable_type);

CREATE INDEX answers_vote_rating ON answers USING btree(vote_rating);
CREATE INDEX questions_updated_at ON questions USING btree(updated_at);
