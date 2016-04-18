
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
