<?php
include("db.php");
session_start();

if (!isset($_SESSION['loggedInStatus'])) {
    header('Location: ../sites/login.php');
    exit();
}

// Query to fetch all data from the booking table
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

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

// Close the statement and connection
$stmt->close();
$conn->close();
?>


<?php
// include("db.php");
// session_start();

// if (!isset($_SESSION['loggedInStatus'])) {
//     header('Location: ../sites/login.php');
//     exit();
// }

// $username = $_SESSION['username'];

// // Fetch bookings based on the username
// $stmt = $conn->prepare("SELECT * FROM booking WHERE username = ?");
// $stmt->bind_param("s", $username);
// $stmt->execute();
// $bookings = $stmt->get_result();

// $bookings_data = [];
// while ($row = $bookings->fetch_assoc()) {
//     $bookings_data[] = $row;
// }

// // Close the statement and connection
// $stmt->close();
// $conn->close();

// // Return the bookings data as a multidimensional array
// header('Content-Type: application/json');
// echo json_encode($bookings_data);
?>


