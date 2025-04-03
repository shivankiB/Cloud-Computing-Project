<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // User is not logged in, redirect to login page
    header("Location: login1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CanvasCrafted.com</title>
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header id="header">
        <div id="currency-selector">
            <select id="currency" onchange="changeCurrency()">
                <option value="inr">INR</option>
                <option value="usd">USD</option>
                <option value="eur">EUR</option>
            </select>        
        </div>
        
        <div class="header-content-div">
            <a href="#home-sec">
            <img
              src="logo.PNG"
              alt="Company Logo"
              id="header-img"
           /></a>
            <nav>
                <a href="index.php" class="nav-link">HOME</a>
                <a href="arts.php" class="nav-link">ARTS</a>
                <a href="sell.php" class="nav-link">SELL</a>
                <a href="about.php" class="nav-link">ABOUT</a>
                <a href="contact.php" class="nav-link">CONTACT</a>              
                <a href="#cart" class="fa fa-shopping-cart" style="font-size:24px; padding: 10px; color: black; "></a>     
                <a href="register1.php" class="fa fa-user" style="font-size:24px ; padding:10px; color: black"></a>
                <a href="dashboard.php" class="nav-link">ACCOUNT</a>
            </nav>
        </div>
    </header><body>
    <br><br><h1 style="text-align: center;">Shopping Cart</h1><br><br>
    <div id="cart-items"></div><br><br>
    <button id="checkout-btn"  style="display: block; margin: 0 auto;">Checkout</button>
    <div id="thank-you" style="display: none; margin: 0 auto;">
        <h2 style="text-align:center;">Thank you for your Purchase!</h2>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="cart.js"></script>
</body>
</html>