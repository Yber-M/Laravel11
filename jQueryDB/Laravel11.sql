CREATE DATABASE laravel11;

use laravel11;
CREATE TABLE posts (
	id INT auto_increment PRIMARY KEY,
    title VARCHAR(255) NOT NULL
);

INSERT INTO posts(title) VALUES
('POST Marlon'),
('POST Aureliano'),
('POST Jesús');

INSERT INTO posts(title) VALUES
('POST Tu Viejita');

DELETE FROM posts WHERE id = 1;

SELECT * FROM posts;