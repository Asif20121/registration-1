CREATE TABLE users (
	Id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    dob DATE,
    image VARCHAR(1000)
);

ALTER TABLE users
ADD email VARCHAR(255) NOT NULL;

INSERT INTO users (username, password, gender, dob, image, email) VALUES ('abtahi101', '11223344', 'male', '12-11-1999', '/uploads/Batman.png', 'abtahitajwar@gmail.com')