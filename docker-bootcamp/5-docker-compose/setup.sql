CREATE DATABASE IF NOT EXISTS docker_bootcamp;
USE docker_bootcamp;
CREATE TABLE IF NOT EXISTS visitors ( count INT(11));
TRUNCATE visitors;
INSERT INTO visitors (count) VALUES (0);
