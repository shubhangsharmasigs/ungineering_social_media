CREATE DATABASE social_media;

USE social_media;

CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NULL,
    college VARCHAR(255) NULL,
    PRIMARY KEY(id)
);  

CREATE TABLE statuses(
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    status VARCHAR(1000) NOT NULL,
    date VARCHAR(255) NOT NULL,
    time VARCHAR(255) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) references users(id)
);  
