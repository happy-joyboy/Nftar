<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $booking_date = $_POST['date'];
    $booking_time = $_POST['time'];
    $number_of_guests = $_POST['guests'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO booking (guest_name, email, phone_number, booking_date, booking_time, number_of_guests) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $email, $phone_number, $booking_date, $booking_time, $number_of_guests);


    if ($stmt->execute()) {
        echo "Booking successful!";
        header("Location: /sites/thx.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $conn->close();

}
?>