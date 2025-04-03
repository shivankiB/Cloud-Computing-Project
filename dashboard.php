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
        <?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email']) && !isset($_COOKIE['user_email'])) {
    // User is not logged in, redirect to login page
    header("Location: login1.php");
    exit;
}

// If the user is logged in using a cookie, renew the session
if (!isset($_SESSION['email']) && isset($_COOKIE['user_email'])) {
    $_SESSION['email'] = $_COOKIE['user_email'];
}

// Include any header, navigation, or other shared content here

// Display user-specific content or features
echo "<br><br><h2>Welcome </h2>";
echo "<p>You are logged in as: " . $_SESSION['email'] . "</p>";
?>
<form action="logout.php" method="post">
        <button type="submit" style="width: 5%; text-align:center; border: none; border-radius: 5px; cursor: pointer;" name="logout">Logout</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
</main>
</body>
<footer>
    <p>&copy;CanvasCrafted.com. All rights reserved.</p>
</footer>
</html>