--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: answers; Type: TABLE; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE TABLE answers (
    id SERIAL,
    user_id integer NOT NULL,
    question_id integer NOT NULL,
    body text NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone
);


ALTER TABLE answers OWNER TO lbaw1513;

--
-- Name: bans; Type: TABLE; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE TABLE bans (
    id SERIAL,
    user_id integer NOT NULL,
    creator_id integer NOT NULL,
    notes text,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    expired_at timestamp(0) without time zone,
    CONSTRAINT bans_user_id_check_not_self CHECK ((user_id <> creator_id))
);


ALTER TABLE bans OWNER TO lbaw1513;

--
-- Name: follows; Type: TABLE; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE TABLE follows (
    user_id integer NOT NULL,
    followed_id integer NOT NULL,
    CONSTRAINT follows_user_ckeck_notself CHECK ((user_id <> followed_id))
);


ALTER TABLE follows OWNER TO lbaw1513;

--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE TABLE password_resets (
    user_id integer NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE password_resets OWNER TO lbaw1513;

--
-- Name: questions; Type: TABLE; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE TABLE questions (
    id SERIAL,
    user_id integer NOT NULL,
    title character varying(100) NOT NULL,
    body text NOT NULL,
    solved boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone
);


ALTER TABLE questions OWNER TO lbaw1513;

--
-- Name: questions_tags; Type: TABLE; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE TABLE questions_tags (
    question_id integer NOT NULL,
    tag_id integer NOT NULL
);


ALTER TABLE questions_tags OWNER TO lbaw1513;

--
-- Name: tags; Type: TABLE; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE TABLE tags (
    id SERIAL,
    tag character varying(10) NOT NULL
);


ALTER TABLE tags OWNER TO lbaw1513;

--
-- Name: users; Type: TABLE; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE TABLE users (
    id SERIAL,
    username character varying(50) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(256) NOT NULL,
    type character varying(10) DEFAULT 'user'::character varying NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    CONSTRAINT users_type_check_in_enum CHECK (((type)::text = ANY ((ARRAY['user'::character varying, 'mod'::character varying, 'admin'::character varying])::text[])))
);


ALTER TABLE users OWNER TO lbaw1513;

--
-- Name: votes; Type: TABLE; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE TABLE votes (
    user_id integer NOT NULL,
    votable_id integer NOT NULL,
    votable_type character(1) NOT NULL,
    value boolean NOT NULL,
    CONSTRAINT votes_votable_type_check_in_enum CHECK ((votable_type = ANY (ARRAY['q'::bpchar, 'a'::bpchar])))
);


ALTER TABLE votes OWNER TO lbaw1513;

--
-- Name: warnings; Type: TABLE; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE TABLE warnings (
    id SERIAL,
    user_id integer NOT NULL,
    creator_id integer NOT NULL,
    notes text,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    CONSTRAINT warnings_user_id_notself CHECK ((creator_id <> user_id))
);


ALTER TABLE warnings OWNER TO lbaw1513;

--
-- Name: password_resets_token_key; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY password_resets
    ADD CONSTRAINT password_resets_token_key UNIQUE (token);


--
-- Name: pk_answers; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY answers
    ADD CONSTRAINT pk_answers PRIMARY KEY (id);


--
-- Name: pk_bans; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY bans
    ADD CONSTRAINT pk_bans PRIMARY KEY (id);


--
-- Name: pk_follows; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY follows
    ADD CONSTRAINT pk_follows PRIMARY KEY (user_id, followed_id);


--
-- Name: pk_passwords; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY password_resets
    ADD CONSTRAINT pk_passwords PRIMARY KEY (user_id);


--
-- Name: pk_questions; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY questions
    ADD CONSTRAINT pk_questions PRIMARY KEY (id);


--
-- Name: pk_questions_tags; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY questions_tags
    ADD CONSTRAINT pk_questions_tags PRIMARY KEY (question_id, tag_id);


--
-- Name: pk_tags; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY tags
    ADD CONSTRAINT pk_tags PRIMARY KEY (id);


--
-- Name: pk_users; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT pk_users PRIMARY KEY (id);


--
-- Name: pk_warnings; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY warnings
    ADD CONSTRAINT pk_warnings PRIMARY KEY (id);


--
-- Name: tags_tag_key; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY tags
    ADD CONSTRAINT tags_tag_key UNIQUE (tag);


--
-- Name: users_email_key; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_key UNIQUE (email);


--
-- Name: users_username_key; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_username_key UNIQUE (username);


--
-- Name: votes_votable_key; Type: CONSTRAINT; Schema: public; Owner: lbaw1513; Tablespace: 
--

ALTER TABLE ONLY votes
    ADD CONSTRAINT votes_votable_key UNIQUE (user_id, votable_id, votable_type);


--
-- Name: ixfk_answers_questions; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_answers_questions ON answers USING btree (question_id);


--
-- Name: ixfk_answers_users; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_answers_users ON answers USING btree (user_id);


--
-- Name: ixfk_bans_users; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_bans_users ON bans USING btree (user_id);


--
-- Name: ixfk_bans_users_02; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_bans_users_02 ON bans USING btree (creator_id);


--
-- Name: ixfk_follows_users; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_follows_users ON follows USING btree (user_id);


--
-- Name: ixfk_follows_users_02; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_follows_users_02 ON follows USING btree (followed_id);


--
-- Name: ixfk_password_resets_users; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_password_resets_users ON password_resets USING btree (user_id);


--
-- Name: ixfk_questions_tags_questions; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_questions_tags_questions ON questions_tags USING btree (question_id);


--
-- Name: ixfk_questions_tags_tags; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_questions_tags_tags ON questions_tags USING btree (tag_id);


--
-- Name: ixfk_questions_users; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_questions_users ON questions USING btree (user_id);


--
-- Name: ixfk_votes_answers; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_votes_answers ON votes USING btree (votable_id);


--
-- Name: ixfk_votes_questions; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_votes_questions ON votes USING btree (votable_id);


--
-- Name: ixfk_votes_users; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_votes_users ON votes USING btree (user_id);


--
-- Name: ixfk_warnings_users; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_warnings_users ON warnings USING btree (user_id);


--
-- Name: ixfk_warnings_users_02; Type: INDEX; Schema: public; Owner: lbaw1513; Tablespace: 
--

CREATE INDEX ixfk_warnings_users_02 ON warnings USING btree (creator_id);


--
-- Name: fk_answers_questions; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY answers
    ADD CONSTRAINT fk_answers_questions FOREIGN KEY (question_id) REFERENCES questions(id);


--
-- Name: fk_answers_users; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY answers
    ADD CONSTRAINT fk_answers_users FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: fk_bans_users; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY bans
    ADD CONSTRAINT fk_bans_users FOREIGN KEY (user_id) REFERENCES users(id);


--
-- Name: fk_bans_users_02; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY bans
    ADD CONSTRAINT fk_bans_users_02 FOREIGN KEY (creator_id) REFERENCES users(id);


--
-- Name: fk_follows_users; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY follows
    ADD CONSTRAINT fk_follows_users FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: fk_follows_users_02; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY follows
    ADD CONSTRAINT fk_follows_users_02 FOREIGN KEY (followed_id) REFERENCES users(id);


--
-- Name: fk_password_resets_users; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY password_resets
    ADD CONSTRAINT fk_password_resets_users FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: fk_questions_tags_questions; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY questions_tags
    ADD CONSTRAINT fk_questions_tags_questions FOREIGN KEY (question_id) REFERENCES questions(id);


--
-- Name: fk_questions_tags_tags; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY questions_tags
    ADD CONSTRAINT fk_questions_tags_tags FOREIGN KEY (tag_id) REFERENCES tags(id);


--
-- Name: fk_questions_users; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY questions
    ADD CONSTRAINT fk_questions_users FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: fk_votes_users; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY votes
    ADD CONSTRAINT fk_votes_users FOREIGN KEY (user_id) REFERENCES users(id);


--
-- Name: fk_warnings_users; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY warnings
    ADD CONSTRAINT fk_warnings_users FOREIGN KEY (user_id) REFERENCES users(id);


--
-- Name: fk_warnings_users_02; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1513
--

ALTER TABLE ONLY warnings
    ADD CONSTRAINT fk_warnings_users_02 FOREIGN KEY (creator_id) REFERENCES users(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: lbaw1513
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM lbaw1513;
GRANT ALL ON SCHEMA public TO lbaw1513;



--
-- PostgreSQL database dump complete
--

