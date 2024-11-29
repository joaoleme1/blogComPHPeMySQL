CREATE DATABASE blog_db;

USE blog_db;

CREATE TABLE blog_table (
    topic_title VARCHAR(255),
    topic_date DATETIME,
    image_filename VARCHAR(255),
    topic_para TEXT
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(255)
);