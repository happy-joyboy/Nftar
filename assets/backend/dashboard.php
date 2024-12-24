<?php
include("db.php");
session_start();

if (!isset($_SESSION['loggedInStatus'])) {
    header('Location: ../sites/login.php');
    exit();
}

$username = $_SESSION['username'];

if ($username === 'kaneki') {
    $sql = "SELECT * FROM booking";
    $result = $conn->query($sql);
} else {
    // Fetch email of the current user from the users table
    $stmt = $conn->prepare("SELECT email FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $email = $user['email'];
        
        // Use the email to find any booking
        $stmt = $conn->prepare("SELECT * FROM booking WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
    } else {
        echo "No user found with the username.";
    }
}


$bookings = [];

if ($result->num_rows > 0) {
    // Fetch all rows and store them in the array
    while ($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }
} else {
    echo "No data found in the booking table.";
}

$_SESSION["bookings"] = $bookings;


?>
