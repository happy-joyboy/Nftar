<?php
  include("../assets/backend/signup.php");
  $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nftar</title>
    <link rel="icon" href="/assets/images/icon_shapes/Nftar_icon.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

    <link rel="stylesheet" href="/assets/styles/mainStyle.css" />
    <link rel="stylesheet" href="/assets/styles/signup.css" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NFTAR</title>
  </head>
  <body>
    <header>
      <div class="header">
        <div class="headerbar">
          <div class="account">
            <ul>
              <a href="/nftar.html"
                ><li><i class="fa-solid fa-house-chimney"></i></li
              ></a>

              <a href="login.php"
                ><li><i class="fa-solid fa-user" id="user=mb"></i></li
              ></a>
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
          <img src="/assets/images/logo/Nftar_logo.png" alt="logo" />
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
            <a href="/nftar.html"
              ><li><i class="fa-solid fa-house-chimney"></i></li
            ></a>

            <a href="login.php"
              ><li><i class="fa-solid fa-user" id="user=mb"></i></li
            ></a>
          </ul>
        </div>
      </div>
    </header>
    <div class="container22">
      <div class="signup-container">
        <h1>Sign Up</h1>
        <p>Create an account to get started</p>
        <form action="../assets/backend/signup.php" method="POST" id="signupForm">
          <label for="username">Username</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Enter your username"
            required
          />

          <label for="email">Email Address</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
          />

          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required
          />

          <label for="confirm-password">Confirm Password</label>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            placeholder="Re-enter your password"
            required
          />

          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob" required />

          <button type="submit"  name="signup" value="signup" >Create Account</button>
        </form>
        <p>Already have an account <a href="login.php">Log in here</a></p>
      </div>
    </div>
    <footer>
      <div>
        <p>&copy; 2024 Restaurant. All rights reserved.</p>
      </div>
  </footer>
    <script src="/assets/scripts/nav.js"></script>
    <script src="/assets/scripts/pass_check.js"></script>
  </body>
</html>
