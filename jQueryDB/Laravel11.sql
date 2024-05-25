CREATE DATABASE LaravelDB;

use LaravelDB;

CREATE TABLE posts (
	id INT auto_increment PRIMARY KEY,
    title VARCHAR(255) NOT NULL
);
INSERT INTO posts(title) VALUES 
('PostMarlon'),
('PostYber'),
('PostQuispe'),
('PostOlano');

INSERT INTO posts(title, created_at, updated_at) VALUES
('POST Marlon', now(), now()),
('POST Aureliano', now(), now()),
('POST Jesús',now(), now()),
('POST Tu Viejita', now(), now());


DELETE FROM posts WHERE id = 1;

SELECT * FROM posts;

DROP TABLE posts;

DROP DATABASE laravel11;