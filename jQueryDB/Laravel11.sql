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

INSERT INTO posts(correo, dni, nombre, edad, title, cuerpo, created_at, updated_at) VALUES
('postmarlon@gmail.com', 
'23894567', 'Marlon Yber Quispe Olano', 
20, 
'Los Bosques de Noche', 
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper sed tellus a sollicitudin. Donec condimentum quis nisi non bibendum. Aliquam at nisi maximus, hendrerit lectus ac, accumsan massa. Aliquam suscipit, metus sit amet dignissim mollis, lorem dolor bibendum augue, in pretium nisi nisi ut enim. Vestibulum eget interdum nisi.', 
now(), 
now()),

('postaureliano@gmail.com', 
'89896723', 'Aureliano Buendia Rios', 25, 'El bar del vulebar', 
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper sed tellus a sollicitudin. Donec condimentum quis nisi non bibendum. Aliquam at nisi maximus, hendrerit lectus ac, accumsan massa. Aliquam suscipit, metus sit amet dignissim mollis, lorem dolor bibendum augue, in pretium nisi nisi ut enim. Vestibulum eget interdum nisi.', 
now(), 
now()),

('postjesus@gmail.com', 
'89436721', 'Jesus Esquives Zapata', 30, 'La noche estrellada', 
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper sed tellus a sollicitudin. Donec condimentum quis nisi non bibendum. Aliquam at nisi maximus, hendrerit lectus ac, accumsan massa. Aliquam suscipit, metus sit amet dignissim mollis, lorem dolor bibendum augue, in pretium nisi nisi ut enim. Vestibulum eget interdum nisi.', 
now(), 
now()),

('postdaniel@gmail.com', '32984367', 'Daniel Infante Cornelio', 28, 'Los jazmines de odin',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper sed tellus a sollicitudin. Donec condimentum quis nisi non bibendum. Aliquam at nisi maximus, hendrerit lectus ac, accumsan massa. Aliquam suscipit, metus sit amet dignissim mollis, lorem dolor bibendum augue, in pretium nisi nisi ut enim. Vestibulum eget interdum nisi.', 
now(), 
now());

DESCRIBE posts;

DELETE FROM posts WHERE id = 1;

SELECT * FROM posts;

DROP TABLE posts;

DROP DATABASE laravel11;