<?php
    session_start();
    include("db.php");


    if (isset($_SESSION['loggedInStatus'])) {
        header('Location: ../sites/dashboard.php');
        exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm-password'];
        $dob = $_POST['dob']; 

        // Validate that passwords match
        if ($password !== $confirmPassword) {
            echo "Passwords do not match.";
            exit;
        }

        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmnt = $conn->prepare("INSERT INTO users (username, email, password, date_of_birth) VALUES (?, ?, ?, ?)");
        $stmnt->bind_param("ssss", $username, $email, $password, $dob);
        $stmnt->execute();

        if ($stmnt->affected_rows > 0) {
            echo "User created successfully.";
            header('Location: /sites/login.php');
            exit();
        } else {
            echo "Error creating user.";
        }


    }

        // Close the statement and connection
        $conn->close();
?>
