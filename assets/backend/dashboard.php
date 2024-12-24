<?php
include("db.php");
session_start();

if (!isset($_SESSION['loggedInStatus'])) {
    header('Location: ../sites/login.php');
    exit();
}

$username = $_SESSION['username'];


if(!isset(($username))) {
    $username = "";
}
if ($username === 'kaneki') {

    $sql = "SELECT * FROM booking";
    $result = $conn->query($sql);

} else {

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
    }
}

$bookings_data = [];
while ($row = $result->fetch_assoc()) {
    // Remove the seconds part from booking_time
    if (isset($row['booking_time'])) {
        $row['booking_time'] = date('H:i', strtotime($row['booking_time']));
    }
    $bookings_data[] = $row;
}

$_SESSION["bookings"] = $bookings_data;


?>
