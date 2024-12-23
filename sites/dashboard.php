<?php 
    include("../assets/backend/dashboard.php")
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
    <style>
    
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
        .bookings {
            margin-top: 20px;
            text-align: left;
        }
    </style>
  </head>
  <body>
    <header>
        <div class="header">
            <div class="headerbar">
                <div class="account">
                    <ul>
                        <a href="/nftar.html"><li><i class="fa-solid fa-house-chimney"></i></li></a>
                        <a href="/assets/backend/logout.php"><li><i class="fa-solid fa-person-running" style="color: #ff1c38;font-size:1.3rem"></i></li></a>

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

    <div class="bookings">
        <h2>Your Bookings</h2>
        <ul>
            <?php if (!empty($_SESSION["bookings"])): ?>
                <?php foreach ($_SESSION["bookings"] as $booking): ?>
                    <li>Booking on <?php echo htmlspecialchars($booking['booking_date']); ?> at <?php echo htmlspecialchars($booking['booking_time']); ?> for <?php echo htmlspecialchars($booking['number_of_guests']); ?> guests.</li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>No bookings found.</li>
            <?php endif; ?>
        </ul>
    </div>
    
    <script src="/assets/scripts/nav.js"></script>
  </body>
</html>
