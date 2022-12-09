CREATE TABLE users (
  id int(10) UNSIGNED NOT NULL,
  email varchar(255) NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(100) NOT NULL,
);

-- nama user nanti ganti 

INSERT INTO users (id, username, email, password) VALUES
(1, user1, user1@email.com, user1),
(2, user2, user2@email.com, user2),
(3, user3, user3@email.com, user3);