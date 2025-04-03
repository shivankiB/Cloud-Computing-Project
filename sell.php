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
                <a href="cart.php" class="fa fa-shopping-cart" style="font-size:24px; padding: 10px; color: black; "></a>     
                <a href="register1.php" class="fa fa-user" style="font-size:24px ; padding:10px; color: black"></a>
                <a href="dashboard.php" class="nav-link">ACCOUNT</a>
            </nav>
        </div>
    </header>
    <main>
        <section id="sell" class="sec-padding">
            <h1 style="text-align: center;">Sell Your Artworks</h1><br>
            <p>If you're an artist interested in selling your artworks on CanvasCrafted.com, please fill out the form below and we'll get in touch with you.</p>
            <form action="sell1.php" method="post" enctype="multipart/form-data">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
              <label for="artwork_title">Artwork Title:</label>
              <input type="text" id="artwork_title" name="artwork_title" required>

              <label for="price">Price:</label>
              <input type="text" id="price" name="price" required>

              <label for="artwork_description">Artwork Description:</label>
              <textarea id="artwork_description" name="artwork_description" rows="4" required></textarea>
              <label for="artwork_image">Upload Image:</label>
              <input type="file" id="artwork_image" name="artwork_image" accept="image/*" required>
              <button>Submit</button>
            </form>
    </section>
    </main>
    <footer>
        <p>&copy;CanvasCrafted.com. All rights reserved.</p>
    </footer>
    </html>