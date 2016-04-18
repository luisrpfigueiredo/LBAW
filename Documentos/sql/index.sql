ALTER TABLE questions ADD COLUMN full_text_index_col tsvector;
UPDATE questions SET full_text_index_col = to_tsvector('english', coalesce(title,'') || ' ' || coalesce(body,''));

CREATE TRIGGER questions_tsvector_update_trigger 
BEFORE INSERT OR UPDATE ON questions FOR EACH ROW 
EXECUTE PROCEDURE tsvector_update_trigger_column('full_text_index_col', 'pg_catalog.english', 'title', 'body');

CREATE INDEX questions_question_search_idx ON questions USING gin(full_text_index_col);
CREATE INDEX answers_question_search_idx ON answers USING gin(body);

CREATE OR REPLACE FUNCTION search_questions(psearch text)
RETURNS TABLE (question_id INTEGER) AS $func$
BEGIN
	return QUERY
		SELECT DISTINCT(questions.id)
		FROM questions INNER JOIN answers ON questions.id = answers.question_id
		WHERE questions.full_text_index_col @@ to_tsquery(psearch)
			OR to_tsvector(answers.body) @@ to_tsquery(psearch);
END
$func$  LANGUAGE plpgsql;

CREATE INDEX users_username ON users USING hash(username);
CREATE INDEX users_email ON users USING hash(email);

CREATE INDEX votes_votable_id ON votes USING hash(votable_id);
CREATE INDEX votes_votable_type ON votes USING hash(votes_votable_type);