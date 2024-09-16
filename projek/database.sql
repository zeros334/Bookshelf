CREATE TABLE users (
  id int(10) UNSIGNED NOT NULL,
  email varchar(255) NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(100) NOT NULL,
);

-- nama user nanti ganti 

INSERT INTO users (id, username, email, password) VALUES
(1, user1, user1@email.com, useruser1),
(2, user2, user2@email.com, useruser2),
(3, user3, user3@email.com, useruser3);

CREATE TABLE books (
  title varchar(255) NOT NULL,
  author char(255) NOT NULL,
  content_link varchar(255) NOT NULL,
);
