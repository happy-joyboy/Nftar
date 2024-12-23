<?php
    session_start();
    include("db_connection.php");


    // Check if already logged in
    if (isset($_SESSION['loggedInStatus'])) {
        header('Location: ../sites/dashboard.php');
        exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepared statements to prevent SQL injection # be safe be secure
        $stmt = $conn->prepare("SELECT * FROM restaurant WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $_SESSION['loggedInStatus'] = true;
            $_SESSION['LAST_ACTIVITY'] = time();
            header("Location: /nftar.html");
            exit();
        }
    }
?>
