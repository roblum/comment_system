CREATE TABLE comments(userId INT, date DATE, comment VARCHAR(300) NOT NULL, FOREIGN KEY (userId) REFERENCES users(userId));
CREATE TABLE users(userId INT AUTO_INCREMENT, name VARCHAR(15) NOT NULL, PRIMARY KEY(userId));