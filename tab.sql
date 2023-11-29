-- Create a database named 'user'
CREATE DATABASE IF NOT EXISTS user;

-- Switch to the 'user' database
USE user;

-- Create a table named 'table'
CREATE TABLE IF NOT EXISTS table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    usertype ENUM('user', 'admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Add an index on the 'username' column for faster lookups
CREATE INDEX idx_username ON table (username);
