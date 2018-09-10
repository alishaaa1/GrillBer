<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <title>GrillBer</title>
    </head>
    
    <body>
        <header>
            <nav>
                <div class="row" id="top">
                    <img src="resources/img/logo2.png" alt="Grillber logo" class="logo">
                    <ul class="main-nav">
                        <?php if(isset($_SESSION['username'])) {
                        echo 'Hello ' . $_SESSION['username'];
                        } else {
                        echo '<li><a href="#top"><span>Home</span></a></li>';
                        } ?>
                        <li><a href="#rental">Rentals</a></li>
                        <li><a href="#step">How it works</a></li>
                        <?php if(isset($_SESSION['username'])) {
                        echo '<li><a href="logout.php"><span>Logout</span></a></li>';
                        } else {
                        echo '<li><a href="login.php"><span>Login</span></a></li>';
                        } ?>
                        <li><a href="reserve.php">Reserve</a></li>
                    </ul>
                </div>
             </nav>
        </header>
        
        <section class="middle">
            <div class="hero-text-box">  
                <h1 class="main">GRILLBER</h1>
                <h1>Bringing the BBQ to you.</h1>
                <a class="btn btn-full js--scroll-to-start" href="#">Show me more</a>
            </div>
        </section>
       
        
        <section class="section-features js--section-features">
            <div class="row">
                 <h2>&mdash; Our Mission &mdash;</h2>
                 <p class="main-text"> To provide easy access to grills and grilling equipments.</p>
            </div>
            <div class="row">
                <h2> About </h2>
                <p class="main-text">GrillBer is an easiest way to have a BBQ. You don't need to own a grill - just rent for a day and enjoy with your friends and family! We deliver the grill in an hour. We have a variety of grill rentals to provide a perfect solution to all your social events. What's more? Along with the wide range of grills, we have extra seating arrangement gear - chairs and turf roll! </p>
            </div>
        </section>
        
        
        <section class="section-rentals" id="rental">
            <div class="row">
                <h2>&mdash; Our Products &mdash;</h2>
            </div>
            
            <div class="row">
                <div class="col span-1-of-2 box flow">
                      <img src="resources/img/LARGE.jpg" alt="L">
                </div>
                <div class="col span-1-of-2 box">
                   <div class="inner">
                        <h3> Large Big Egg Grill</h3>
                        <p class="long-copy"> The Large EGG is the most popular size and a favorite to handle the cooking needs of most families and gatherings of friends. Accommodates all EGGcessories for baking, roasting or smoking.</p>
                        <h5> Specifications </h5>
                        <p class="small-copy"> Grid Diameter: 18.25 in / 46 cm <br> Cooking Area: 262 sq in / 1688 sq cm <br> Weight: 162 lbs / 73 kgs</p>
                        <h5>The Large EGG can cook</h5>
                       <p class="small-copy">20-pound turkeys, 12 burgers, 6 chickens vertically, 8 steaks, or 7 racks of ribs vertically</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col span-1-of-2 box">
                   <div class="inner">
                        <h3> XL Big Egg Grill</h3>
                        <p class="long-copy"> The XLarge Big Green Egg provides a cooking area that can easily accommodate meals for large families and cookouts with all your friends – and you can efficiently prepare several meals over the coals at once.</p>
                        <h5> Specifications </h5>
                        <p class="small-copy"> Grid Diameter: 24 in / 61 cm <br> Cooking Area: 452 sq in / 2919 sq cm <br> Weight: 219 lbs / 99 kgs</p>
                        <h5>The XL EGG can cook</h5>
                        <p class="small-copy">2 20-pound turkeys, 24 burgers, 11 whole chickens, 12 steaks, or 12 racks of ribs vertically</p>
                    </div>
                 </div>
                <div class="col span-1-of-2 box flow">
                      <img class="resize" src="resources/img/XLARGE.jpg" alt="XL">
                </div>
            </div>
            
            <div class="row">
                <div class="col span-1-of-2 box flow">
                      <img src="resources/img/XXLARGE.jpg" alt="2XL">
                </div>
                <div class="col span-1-of-2 box">
                   <div class="inner">
                        <h3> 2XL Big Egg Grill</h3>
                        <p class="long-copy"> 2XL EGG can easily handle your family reunion or cookouts with large groups – and is more than large enough to satisfy restaurant and catering needs.</p>
                        <h5> Specifications </h5>
                        <p class="small-copy"> Grid Diameter: 29 in / 74 cm <br> Cooking Area: 672 sq in / 4336 sq cm <br> Weight: 375 lbs / 170 kg</p>
                        <h5>The 2XL EGG can cook</h5>
                        <p class="small-copy"> 35-40 burgers, 14-16 whole chickens, 18-20 steaks, 20 mouth-watering racks of rib vertically, or 1 perfectly crisp suckling pig</p>
                    </div>
                </div>
            </div>
        </section>
        
      <section class="section-steps" id="step">
            <div class="row">
                <h2> How it works &mdash; 4 easy steps! </h2>
            </div>
            <div class="row">
                <div class="col span-1-of-4 steps-box">
                   <img src="resources/img/book.png">
                    <p> Choose the Grill that best fits your needs and reserve it. </p>
                </div>
                <div class="col span-1-of-4 steps-box">
                    <img src="resources/img/delivery.png">
                    <p> Get the grill delivered at your desired location. </p>
                </div>
                <div class="col span-1-of-4 steps-box">
                    <img src="resources/img/grill.png">
                    <p> Enjoy your Grillicious meal! </p>
                </div>
                <div class="col span-1-of-4 steps-box">
                    <img src="resources/img/again.jpg">
                    <p> Return the grill and let us help you reserve a grill again! </p>
                </div>
            </div>
        </section>
        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2018 by GrillBer. All rights reserved.
                </p>
            </div>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="stript.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
    </body>
</html>