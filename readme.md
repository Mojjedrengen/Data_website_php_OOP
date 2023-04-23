
How to setup database

Open xamp and start Apache and MySQL.
Open localhost/phpmyadmin on your webbrowser.
Make new database with the name of oopdatacollectioninfomatik.
Click on SQL and write:

CREATE TABLE users (
  users_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
  users_uid TINYTEXT not null,
  users_email TINYTEXT not null,
  users_pwd LONGTEXT not null
);

Click on SQL again and write:

CREATE TABLE profiles (
  profiles_id int(11) NOT NULL AUTO_INCREMENT,
  profiles_about text NOT NULL,
  profiles_introtitle text NOT NULL,
  profiles_introtext text NOT NULL,
  users_id int,
  PRIMARY KEY (profiles_id),
  FOREIGN KEY (users_id) REFERENCES users(users_id)
);

CREATE TABLE posts (
	posts_id int(11) NOT NULL AUTO_INCREMENT,
  posts_text text NOT NULL,
  post_date date NOT NULL,
  users_id int(11) NOT NULL,
  PRIMARY KEY (posts_id),
  FOREIGN KEY (users_id) REFERENCES users(users_id)
);

CREATE TABLE likes (
	likes_id int(11) NOT NULL AUTO_INCREMENT,
  posts_id int(11) NOT NULL,
  users_id int(11) NOT NULL,
  PRIMARY KEY (likes_id),
  FOREIGN KEY (posts_id) REFERENCES posts(posts_id),
	FOREIGN KEY (users_id) REFERENCES users(users_id)
);

Done database sat up.

Credit:

login system: https://www.youtube.com/watch?v=BaEm2Qv14oU&t
profile system: https://www.youtube.com/watch?v=SfE_bXFQmCU
