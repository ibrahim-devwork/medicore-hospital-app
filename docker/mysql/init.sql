CREATE DATABASE IF NOT EXISTS medicore_hospital_db;

USE medicore_hospital_db;

-- Create categories table
CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

-- Insert fake data into categories table
INSERT INTO categories (name) VALUES ('Cardiology'), ('Neurology'), ('Pediatrics'), ('Oncology'), ('Orthopedics');

-- Create doctors table
CREATE TABLE IF NOT EXISTS doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- Insert fake data into doctors table
INSERT INTO doctors (first_name, last_name, category_id) VALUES
('John', 'Doe', 1),
('Jane', 'Smith', 2),
('Michael', 'Brown', 3),
('Emily', 'Davis', 4),
('Chris', 'Wilson', 5);

-- Create patients table
CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender VARCHAR(10) NOT NULL,
    address TEXT NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    category_id INT,
    doctor_id INT,
    appointment_time DATETIME NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id),
    FOREIGN KEY (doctor_id) REFERENCES doctors(id)
);

-- Insert fake data into patients table
INSERT INTO patients (first_name, last_name, date_of_birth, gender, address, phone_number, category_id, doctor_id, appointment_time) VALUES
('Alice', 'Johnson', '1990-01-01', 'Female', '123 Main St', '123-456-7890', 1, 1, '2024-08-01 10:00:00'),
('Bob', 'Miller', '1985-05-20', 'Male', '456 Elm St', '234-567-8901', 2, 2, '2024-08-01 11:00:00'),
('Charlie', 'Taylor', '2000-12-15', 'Male', '789 Oak St', '345-678-9012', 3, 3, '2024-08-01 12:00:00'),
('Diana', 'Anderson', '1995-09-10', 'Female', '101 Pine St', '456-789-0123', 4, 4, '2024-08-01 13:00:00'),
('Evan', 'Thomas', '1988-03-25', 'Male', '202 Maple St', '567-890-1234', 5, 5, '2024-08-01 14:00:00');
