CREATE DATABASE library;

USE library;

CREATE TABLE users (
  id INT NOT NULL PRIMARY KEY auto_increment,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL
);

-- nama user nanti ganti 

INSERT INTO users (id, username, password) VALUES
(1, 'user1', 'useruser1'),
(2, 'user2', 'useruser2'),
(3, 'user3', 'useruser3');