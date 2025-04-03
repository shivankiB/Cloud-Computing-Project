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
    <title></title>
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
                <a href="#cart" class="fa fa-shopping-cart" style="font-size:24px; padding: 10px; color: black; "></a>     
                <a href="register1.php" class="fa fa-user" style="font-size:24px ; padding:10px; color: black"></a>
                <a href="dashboard.php" class="nav-link">ACCOUNT</a>
            </nav>
        </div>
    </header>
    <main>
        <style>
            /* Basic styling for the contact form */
.contact-form {
    width: 50%;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button[type="submit"] {
    background-color: #007bff;;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

        </style>
        
        <section class="sec-padding">
        <h1 style="text-align: center;">Contact Us</h1><br>
        <div class="contact-form">
            <form action="contactsubmit.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject">

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send Message</button>
            </form><br>
            <h3 style="text-align: center;">OR</h3><br>
            <h4 style="text-align: center">Visit Us</h4><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.1788568233477!2d73.12613516949902!3d18.988171167017413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e90014391e35%3A0xc5f27743806a7426!2sCanvasCrafted.com!5e0!3m2!1sen!2sin!4v1709468400074!5m2!1sen!2sin" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</section>
</main>
    <footer>
       <p>&copy;CanvasCrafted.com. All rights reserved.</p>
    </footer>
    </html>
