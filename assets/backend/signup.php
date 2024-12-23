<?php
    session_start();
    include("db_connection.php");


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


        $stmt = $conn->prepare("INSERT INTO users (username, email, password, date_of_birth) 
                                VALUES (:username, :email, :password, :dob)");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':dob', $dob);

        // Execute the query
        $stmt->execute();

        header('Location: ../sites/login.php');
        exit();

    }
?>
