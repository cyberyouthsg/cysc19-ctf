-- Simple SQL configuration to be used for challenge
CREATE DATABASE IF NOT EXISTS flagstore;
USE flagstore;

CREATE TABLE login_table (
	username varchar(30) NOT NULL,
	password varchar(30) NOT NULL,
	PRIMARY KEY(username)
);


INSERT INTO login_table (username, password) VALUES ('guest', 'securepwd');
