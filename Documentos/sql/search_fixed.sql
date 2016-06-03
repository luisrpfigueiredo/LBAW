CREATE OR REPLACE FUNCTION search_questions(psearch text)
RETURNS TABLE (question_id INTEGER) AS $func$
BEGIN	
	return QUERY
		SELECT DISTINCT(questions.id)
		FROM questions
		WHERE to_tsvector(coalesce(questions.title,'') || ' ' || coalesce(questions.body,'')) @@ to_tsquery(psearch)
			OR questions.id IN (
				SELECT DISTINCT(answers.question_id) FROM answers WHERE to_tsvector(coalesce(answers.body)) @@ to_tsquery(psearch)
			)
		;
END
$func$  LANGUAGE plpgsql;