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
            <section id="home" class="sec">
            <div class="slideshow-container">
                <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                            <img src="https://picjumbo.com/wp-content/uploads/buddha-wallpaper-free-photo.jpg" style="width:100%">
                            <div class="text"><b>Find Your Masterpiece,<br>Make it Yours!</b></div>
                        </div>
                        
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="https://wallpaperbat.com/img/571811-paintings-wallpaper.jpg"style="width:100%">
                            <div class="text"><b>Find Your Masterpiece,<br>Make it Yours!</b></div>
                        </div>
                        
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="https://png.pngtree.com/background/20230522/original/pngtree-flower-painting-picture-image_2692949.jpg" style="width:100%">
                            <div class="text"><b>Find Your Masterpiece,<br>Make it Yours!</b></div>
                        </div>
                </div>
                        <br>
                        <div style="text-align:center">
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                        </div><br><br>
            </div>
            <div class="sec-padding">
                <h1 style="text-align: center;">Shop by Category</h1>
                <div class="sec-content-div flexible">
                    <div class="tile" style="width: 10rem;">
                        <img src="https://i.pinimg.com/736x/ef/26/46/ef2646b821cca54a5ad1cdfcf95d2a1a.jpg" alt="Paintings" />
                        <a href="arts.php"><h4>Paintings</h4></a>
                    </div>
                    <div class="tile" style="width:13rem;">
                        <img src="https://i.etsystatic.com/18445460/r/il/436af2/3617850266/il_570xN.3617850266_sa2e.jpg" alt="Sculptures" style="width: 10rem;"/>
                        <h4>Sculptures</h4>
                    </div>
                    <div class="tile" style="width: 13rem;">
                        <img src="https://g3.img-dpreview.com/6E51F0D637584C018DB8FBE82E3D3065.jpg" alt="Photography" style="width: 10rem ;" />
                        <h4>Photography</h4>
                    </div>
                    <div class="tile" style="width: 13rem;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/77/Alberto_Baumann_Eredit%C3%A0_del_ventesimo_secolo_1980_cm_100x100.jpg" alt="Mixed Media Art" style="width: 10rem;" />
                        <h4 style="font-size: 20px;">Mixed Media Art</h4>
                    </div>
                    <div class="tile" style="width: 13rem;">
                        <img src="https://images.fineartamerica.com/images-medium-large/a-spacial-phenomenon-in-the-cosmos-corey-ford.jpg" alt="Digital Art" style="width: 10rem;" />
                        <h4>Digital Art</h4>
                    </div>
                    <div class="tile" style="width: 13rem;">
                        <img src="https://imgmedia.lbb.in/media/2020/12/5fe35943f2e8ae501f28ea1c_1608735043336.jpg" alt="Textile Art" style="width: 10rem;" />
                        <h4>Textile Art</h4>
                    </div>
                    <div class="tile" style="width: 13rem;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Wave_bowl_MET_LC-2001_549-001_%28cropped%29.jpg" alt="Ceramics Art" style="width: 9.5rem;" />
                        <h4>Ceramics Art</h4>
                    </div>
                    <div class="tile" style="width: 13rem;">
                        <img src="https://5.imimg.com/data5/SELLER/Default/2023/1/SO/HG/ZX/158697618/wooden-handmade-mor-artwork-500x500.jpg" alt="Ceramics Art" style="width: 10rem;" />
                        <h4>Wood Art</h4>
                    </div>

            </div>
        </section>
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 4000); // Change image every 2 seconds
            }
        </script>
       
    </main>
</body>
<footer>
    <p>&copy;CanvasCrafted.com. All rights reserved.</p>
</footer>
</html>