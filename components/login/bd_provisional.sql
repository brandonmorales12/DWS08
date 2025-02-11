CREATE DATABASE trabajo;
USE trabajo;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

/*Usuario ya creado*/
CREATE USER usu IDENTIFIED BY "usu";
GRANT ALL ON trabajo.* TO usu;  