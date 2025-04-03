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
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body><header id="header">
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
    </header>
    <main>
        <section id="about" class="sec-padding">
            
            <h1 style="text-align: center;">About Us</h1><br>
            <p>Welcome to CanvasCrafted.com, your online destination for high-quality, handcrafted artwork.
            At CanvasCrafted, we believe in the power of art to inspire, uplift, and transform spaces. Our mission is to connect art lovers with unique pieces created by talented artists from around the world.
            Each piece in our collection is carefully curated to ensure exceptional quality and artistic expression. Whether you're looking for a statement piece to decorate your home or a thoughtful gift for a loved one, we have something for every style and taste.
            Our team is passionate about art and committed to providing outstanding customer service. We strive to make your shopping experience enjoyable and hassle-free, from browsing our gallery to receiving your order.
            Thank you for choosing CanvasCrafted.com. We look forward to helping you discover the perfect artwork to enhance your life and surroundings.</p>
            <video width="720" height="240" controls>
            <source src="video.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video>

        </div>
        </section>
    </main>
    <footer>
        <p>&copy;CanvasCrafted.com. All rights reserved.</p>
    </footer>
    </html>