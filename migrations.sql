DROP DATABASE IF EXISTS blog_ipb23;

CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE posts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content  VARCHAR(5200),
	category_id INT,
	comment_id INT
);

INSERT INTO posts
(content, category_id)
VALUES
("A", 1),
("B", 2),
("C", 3);

SELECT * FROM posts;

CREATE TABLE categories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	category_name  VARCHAR(25)
);
INSERT INTO categories
(category_name)
VALUES
("Svētki"),
("Mūzika"),
("Sports");

CREATE TABLE comments (
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 autors VARCHAR(25),
 date_time DATETIME NOT NULL DEFAULT NOW(),
 saturs VARCHAR(5200)
);
INSERT INTO comments 
(autors, saturs) 
VALUES
('Test User', 'This is a test comment.');

SELECT * FROM comments;
