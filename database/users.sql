CREATE DATABASE ProfileLogin;
USE ProfileLogin;
CREATE TABLE Users(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    fullName VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    dateOfBirth DATE NOT NULL,
    gender VARCHAR(10),
    department VARCHAR(50),
    profilePic TEXT,
    address TEXT 
);