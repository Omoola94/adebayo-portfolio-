<?php
// booking-db.php

// Database connection details
$host = 'localhost';
$db_name = 'your_database';
$username = 'your_username';
$password = 'your_password';

// Create a connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to create a booking
function createBooking($name, $email, $date, $service) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, date, service) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $date, $service);
    $stmt->execute();
    $stmt->close();
    return $conn->insert_id;
}

// Function to get all bookings
function getAllBookings() {
    global $conn;
    $result = $conn->query("SELECT * FROM bookings");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Function to delete a booking
function deleteBooking($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM bookings WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Close the connection
$conn->close();
?>
