




-- Create the database
CREATE DATABASE restaurant;

-- Use the database
USE restaurant;

-- Create the booking table
CREATE TABLE booking (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique ID for each booking
    guest_name VARCHAR(100) NOT NULL, -- Guest's name
    email VARCHAR(255) NOT NULL, -- Guest's email
    phone_number VARCHAR(15) NOT NULL, -- Guest's phone number
    booking_date DATE NOT NULL, -- Booking date (HTML input type date)
    booking_time TIME NOT NULL, -- Booking time (HTML input type time)
    number_of_guests INT NOT NULL, -- Number of guests
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp of booking creation
);




-- Create the users table

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique ID for each user
    username VARCHAR(50) NOT NULL UNIQUE, -- Username of the user
    password VARCHAR(255) NOT NULL, -- Encrypted password of the user
    email VARCHAR(255) NOT NULL UNIQUE, -- Email address of the user
    date_of_birth DATE NOT NULL, -- Date of birth of the user
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp of account creation
);