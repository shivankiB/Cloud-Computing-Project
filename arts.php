<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login1.php");
    exit;
}

// Database Connection (Direct Connection)
$servername = "localhost"; // Change this if using an external database
$username = "root"; // Replace with actual username
$password = ""; // Replace with actual password
$database = "ip"; // Connect to the 'ip' database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch artworks from the 'artworks' table
$sql = "SELECT id, artwork_title, artwork_description, artwork_image, price FROM artworks ORDER BY id DESC";
$result = $conn->query($sql);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="arts.js"></script>
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
         <section id="product-list">
                <h1 style="text-align: center;">Arts</h1><br><br>
                <h2 style="text-align: center;">Paintings</h2>
                <div class="sec-content-div flexible">
                    <div class="tile" style="width: 15rem; height: 23rem;">
                        <img src="https://i.pinimg.com/736x/ef/26/46/ef2646b821cca54a5ad1cdfcf95d2a1a.jpg" alt="Paintings" style="width: 11rem"/>
                        <p style="font-size: 15px;">Colour Painting</p>
                        <p class="price" style="font-size: 15px;">&#8377;349.99</p>
                        <button class="add-to-cart" data-id="1" data-name="Colour Painting" data-price="349.99">Add to Cart</button>
                    </div>
                    <div class="tile" style="width: 15rem; height: 23rem;">
                    <img src="https://i.pinimg.com/736x/12/8a/cc/128accbb7f5d13449ba2761de139f5e8.jpg" alt="Paintings" style="width: 9.5rem"/>
                    <p style="font-size: 15px;">Radhakrishna handpainting </p>                    
                    <p class="price" style="font-size: 15px;">&#8377;749.99</p>
                    <button class="add-to-cart" data-id="2" data-name="Radhakrishna handpainting" data-price="749.99">Add to Cart</button>
                    </div>
                    <div class="tile" style="width: 15rem; height: 23rem;">
                    <img src="https://i.pinimg.com/736x/b2/12/a8/b212a80222df67be29dd48ab8bae0e67.jpg" alt="Paintings" style="width: 12rem"/>
                    <p style="font-size: 15px;">Oil painting</p>
                    <p class="price"style="font-size: 15px;"> &#8377;459.99</p>
                    <button class="add-to-cart" data-id="3" data-name="Oil painting" data-price="459.99">Add to Cart</button>
                 </div>
                </div>
                 <h2 style="text-align: center;">Sculptures</h2>
                 <div class="sec-content-div flexible">
                <div class="tile" style="width: 20rem; height: 23rem;">
                    <img src="https://cdn.thestonestudio.in/wp-content/uploads/2022/12/garuda-statue-for-sale.png" alt="Paintings" style="width: 15rem; height: 15rem;"/>
                    <p style="font-size: 15px;">Garuda statue</p>
                    <p class="price" style="font-size: 15px;">&#8377;1049.99</p>
                    <button class="add-to-cart" data-id="4" data-name="Garuda statue" data-price="1049.99">Add to Cart</button>
                </div>
                <div class="tile" style="width: 15rem; height: 23rem;">
                    <img src="https://cdn.exoticindia.com/images/products/original/sculptures-2019/zep842.jpg" alt="Paintings" style="width: 11rem"/>
                    <p style="font-size: 15px;">Lord Ganesha Statue</p>
                    <p class="price" style="font-size: 15px;"> &#8377;2589.99</p>
                    <button class="add-to-cart" data-id="5" data-name="Lord Ganesha Statue" data-price="2589.99">Add to Cart</button>
                </div>
                <div class="tile" style="width: 18rem; height: 23rem;">
                    <img src="https://www.deczo.com/cdn/shop/products/1e_20ff86d5-6c39-4dfa-979e-616a1e51b384_250x.jpg?v=1656768250" alt="Paintings" style="width: 15rem"/>
                    <p style="font-size: 15px;">Blessing Buddha Statue</p>
                    <p class="price" style="font-size: 15px;"> &#8377;459.99</p>
                    <button class="add-to-cart" data-id="6" data-name="Blessing Buddha Statue" data-price="459.99">Add to Cart</button>
                </div> 
                 </div>
                <h2 style="text-align: center;">Photography</h2>
                <div class="sec-content-div flexible">
                <div class="tile" style="width: 30rem; height: 23rem;">
                    <img src="https://t4.ftcdn.net/jpg/06/29/50/99/360_F_629509959_DhrJbGInEOxxz48yrf8hgcRVp9BFlez2.jpg" alt="Paintings" style="width: 25rem; height: 15rem;"/>
                    <p style="font-size: 15px;">Sunset Scenary</p>
                    <p class="price" style="font-size: 15px;">&#8377;349.99</p>
                    <button class="add-to-cart" data-id="7" data-name="Sunset Scenary" data-price="349.99">Add to Cart</button>
                </div>
            </div>
            <h2 style="text-align: center;">Dynamic Artworks</h2>
        <div class="sec-content-div flexible">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="tile" style="width: 15rem; height: 23rem;">';
                    echo '<img src="' . htmlspecialchars($row['artwork_image']) . '" alt="Artwork" style="width: 12rem"/>';
                    echo '<p style="font-size: 15px;">' . htmlspecialchars($row['artwork_title']) . '</p>';
                    echo '<p class="price" style="font-size: 15px;">&#8377;' . number_format($row['price'], 2) . '</p>';
                    echo '<button class="add-to-cart" data-id="' . $row['id'] . '" data-name="' . htmlspecialchars($row['artwork_title']) . '" data-price="' . $row['price'] . '">Add to Cart</button>';
                    echo '</div>';
                }
            } else {
                echo "<p style='text-align: center;'>No artworks uploaded yet.</p>";
            }
            ?>
        </div>
    </section>
    <?php $conn->close(); ?>
    </main>
    <footer>
        <p>&copy;CanvasCrafted.com. All rights reserved.</p>
    </footer>
    </html>