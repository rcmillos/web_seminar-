CREATE DATABASE web_seminar;
USE web_seminar;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);

CREATE TABLE seminar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(200),
  pembicara VARCHAR(100),
  tanggal DATE
);

INSERT INTO seminar (judul, pembicara, tanggal) VALUES
('Belajar HTML CSS', 'Andi', '2026-06-01'),
('JavaScript Dasar', 'Rina', '2026-06-05'),
('PHP MySQL', 'Budi', '2026-06-10');