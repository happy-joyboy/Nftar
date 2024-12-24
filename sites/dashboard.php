<?php 
    include("../assets/backend/dashboard.php");
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST['email'];
        
        $stmt = $conn->prepare("SELECT * FROM booking WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $bookings_data = [];
        while ($row = $result->fetch_assoc()) {
            // Remove the seconds part from booking_time
            if (isset($row['booking_time'])) {
                $row['booking_time'] = date('H:i', strtotime($row['booking_time']));
            }
            $bookings_data[] = $row;
        }
        
        $_SESSION["bookings"] = $bookings_data; 
        $_SESSION["search"] = true;
    }else{
        $_SESSION["search"] = false;
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="/assets/images/icon_shapes/Nftar_icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> 
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About US</title>
    <link rel="stylesheet" href="/assets/styles/mainStyle.css">
    <link rel="stylesheet" href="/assets/styles/dashboard.css">
  </head>
  <body>
    <header>
        <div class="header">
            <div class="headerbar">
                <div class="account">
                    <ul>
                        <a href="/nftar.html"><li><i class="fa-solid fa-house-chimney"></i></li></a>
                        <a href="/assets/backend/logout.php" ><li><i class="fa-solid fa-person-running" style="color: #ff1c38;font-size:1.3rem"></i></li></a>

                        <!-- <a href="login.html"><li><i class="fa-solid fa-user" id="user=mb"></i></li></a> -->
                        
                    </ul>
                </div>
                <div class="nav">
                    <ul>
                      <a href="aboutsu.html"><li>About</li></a>
                      <a href="menu.html"><li>Menu</li></a>
                      <a href="contactus.html"><li>Contact</li></a>
                      <a href="booking.html"><li>Booking</li></a>
                      <a href="rating.html"><li>Rating</li></a>
                    </ul>
                </div>   
            </div>
            <div class="logo">
                <img src="/assets/images/logo/Nftar_logo.png" alt="logo">
            </div>
            <div class="bar">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-xmark" id="hdcross"></i>
            </div>
            <div class="nav">
                <ul>
                      <a href="aboutsu.html"><li>About</li></a>
                      <a href="menu.html"><li>Menu</li></a>
                      <a href="contactus.html"><li>Contact</li></a>
                      <a href="booking.html"><li>Booking</li></a>
                      <a href="rating.html"><li>Rating</li></a>
                </ul>
            </div>
            <div class="account">
                <ul>
                    <a href="/nftar.html"><li><i class="fa-solid fa-house-chimney"></i></li></a>
                    <a href="/assets/backend/logout.php"><li><i class="fa-solid fa-person-running" style="color: #ff1c38;font-size:1.3rem"></i></li></a>

                    <!-- <a href="login.html"><li><i class="fa-solid fa-user" id="user=mb"></i></li></a> -->
                    
                </ul>
            </div>
        </div>
    </header>
    <h2 class="title">Welcome <?php echo  $_SESSION['username']?></h2>
    <div class="container">

        <?php if (!empty($_SESSION["bookings"])): ?>
            <?php foreach (array_reverse($_SESSION["bookings"]) as $index => $booking): ?>
                <div class="card">
                    <div class="box">
                        <div class="content">
                            <h2><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></h2>
                            <h3>
                                <?php 
                                    if ($_SESSION['username'] == 'kaneki' || $_SESSION["search"]) {
                                        echo $booking['guest_name'];
                                    } else {
                                        echo 'Booked';
                                    }
                                ?>
                            </h3>
                            <p>Booking on <?php echo $booking['booking_date']; ?> at <?php echo $booking['booking_time']; ?> for <?php echo $booking['number_of_guests']; ?> guests.</p>
                            <a href="/sites/menu.html">Read Menu</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>00</h2>
                        <h3>No Bookings</h3>
                        <p>No bookings found.</p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    
    <div class="space">
        <h2 class="title">cant find your reservation ?</h2>
        <div class="box">
            <form action="dashboard.php" method="POST" class="form">
                <input type="email" class="input" name="email" placeholder="Enter your email" required>
                <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>


    <script src="/assets/scripts/nav.js"></script>
  </body>
</html>
