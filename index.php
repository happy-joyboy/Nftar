<?php
session_start();
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


header("Location: nftar.html");
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>waiting...</title>
</head>
<body>
    
</body>
</html>