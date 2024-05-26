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

INSERT INTO posts(dni, title, created_at, updated_at) VALUES
('23894567','POST Marlon', now(), now()),
('89896723','POST Aureliano', now(), now()),
('89436721','POST Jesús',now(), now()),
('32984367','POST Daniel', now(), now());


DELETE FROM posts WHERE id = 1;

SELECT * FROM posts;

DROP TABLE posts;

DROP DATABASE laravel11;