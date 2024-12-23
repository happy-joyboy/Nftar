<?php
    session_start();
    


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

    }
?>
