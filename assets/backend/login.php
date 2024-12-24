<?php
    session_start();
    include("db.php");


    // Check if already logged in
    if (isset($_SESSION['loggedInStatus'])) {
        header('Location: ../sites/dashboard.php');
        exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepared statements to prevent SQL injection # be safe be secure
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $_SESSION['loggedInStatus'] = true;
            $_SESSION['LAST_ACTIVITY'] = time();
            $_SESSION['username'] = $username;
            $session_expired=false;
            $_SESSION['failedlogin'] = false;
            header('Location: /sites/dashboard.php');
            exit();
        }else{
            $_SESSION['failedlogin'] = true;
            header('Location: /sites/login.php');
            exit();
        }
    }

        // Close the statement and connection
        $conn->close();
?>
