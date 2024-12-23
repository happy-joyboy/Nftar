<?php
    session_start();
    if (!isset($_SESSION['loggedInStatus'])) {
        header('Location: ../sites/login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .dashboard {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logout-btn {
            background-color: #ff0057;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .logout-btn:hover {
            background-color: #e6004c;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Welcome to the Dashboard</h1>
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        <form action="../assets/backend/logout.php" method="post">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</body>
</html>