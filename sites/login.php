<?php 
    include("../assets/backend/login.php");
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="/assets/images/icon_shapes/Nftar_icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">    
    <link rel="stylesheet" href="/assets/styles/mainStyle.css">
    <link rel="stylesheet" href="/assets/styles/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFTAR</title>
    <link rel="stylesheet" href="/assets/styles/menu.css">
</head>

<body>

    <header>
        <div class="header">
            <div class="headerbar">
                <div class="account">
                    <ul>
                        <a href="/nftar.html">
                            <li><i class="fa-solid fa-house-chimney"></i></li>
                        </a>
                        
                        <a href="login.html">
                            <li><i class="fa-solid fa-user" id="user=mb"></i></li>
                        </a>

                    </ul>
                </div>
                <div class="nav">
                    <ul>
                        <!-- <a href="#"><li>Home</li></a> -->
                        <a href="aboutsu.html">
                            <li>About</li>
                        </a>
                        <a href="menu.html">
                            <li>Menu</li>
                        </a>
                        <a href="contactus.html">
                            <li>Contact</li>
                        </a>
                        <a href="booking.html">
                            <li>Booking</li>
                        </a>
                        <a href="rating.html">
                            <li>Rating</li>
                        </a>
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
                    <a href="aboutsu.html">
                        <li>About</li>
                    </a>
                    <a href="menu.html">
                        <li>Menu</li>
                    </a>
                    <a href="contactus.html">
                        <li>Contact</li>
                    </a>
                    <a href="booking.html">
                        <li>Booking</li>
                    </a>
                    <a href="rating.html">
                        <li>Rating</li>
                    </a>
                </ul>
            </div>
            <div class="account">
                <ul>
                    <a href="/nftar.html">
                        <li><i class="fa-solid fa-house-chimney"></i></li>
                    </a>
                    
                    <a href="login.php">
                        <li><i class="fa-solid fa-user" id="user"></i></li>
                    </a>

                </ul>
            </div>
        </div>
    </header>

    <div class="login">
        <div class="container">
            <div class="form-section">
                <h1>Sign In</h1>
                <p style="color: gold;">Please enter your login details.</p>
                <form action="../assets/backend/login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <div style="display: flex;justify-content: space-between;">
                            <div>
                                <input type="checkbox" id="remember-me" name="remember-me">
                                <label id="check" for="remember-me">Remember me</label>
                            </div>
                            <a id="forgpass" href="#">Forgot Password?</a>
                        </div>
                        <button type="submit"  name="login" value="Login" class="btn">Log In</button>
                    </div>
                </form>
                <div class="or">-or-</div>
                <div class="social-btns">
                    <button class="btn btn-facebook">Login with Facebook</button>
                    <button class="btn btn-twitter">Login with Twitter</button>
                    <button class="btn btn-google">Login with Google</button>
                </div>
                <div>
                    <p>Don`t have an account? <a href="signup.php">Sign Up here</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/scripts/nav.js"></script>
</body>
</html>