<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBEXPLORE</title>
    <link rel="stylesheet" href="css/style.css?v=9">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- favicon -->
    <link rel="icon" 
    sizes="32*32"
    href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">

</head>
<body>

<header>
        <!-- <div class="header-img" style="background-image: url(./img/pexels-archie-binamira-913215.jpg);"></div> -->
        <div class="header-content">
            <h2 >Let's Travel</h2>
            <!-- <div class="line"></div> -->
            <!-- <h1>A WONDERFUL GIFT</h1> -->
            
        </div>
     </header>
         <!--Events-->
         <section class="events" id="events">
            <div class="container">
                <div class="title">
                    <h1>Upcoming Events</h1>
                    <!-- <div class="line"></div> -->
                </div>
                <div class="box">
                    <div class="card">
                        <img class="card-img" src="./img/card1.jfif" />
                        <h4>Everest camp trek</h4>
                        <p class="font-color">
                            Everest base camp trek is without a doubt, one of
                            the most renowned travel destinations in the world.
                        </p>
                        <a href="#" class="bttn">All Details</a>
                    </div>
                    <div class="card">
                        <img src="./img/card2.jpg" />
                    <h4>Lakshadweep</h4>
                    <p class="font-color">
                        Settled off the Kerala coast on Laccadive sea, Lakshadweep . 
                        A club of 36 islands, a nature tourism destination.
                    </p>
                    <a href="#" class="bttn">All Details</a>
                </div>
                <div class="card">
                    <img src="./img/card3.jpg" />
                    <h4>Desert Safari</h4>
                    <p class="font-color">
                        Embark on the best desert safari in Dubai and try thrilling activities,
                         enjoy BBQ meals, round trip transfers etc.
                    </p>
                    <a href="#" class="bttn">All Details</a>
                </div>
            </div>
        </div>
    </section>
    <!--Events-->
<!-- <div class="background-image" style="background-image: url(./img/pexels-archie-binamira-913215.jpg);"></div> -->


<section class="explore" id="explore">
<div class="explore-content">
<h2>About Us</h2>
<p>
    
Welcome to GlobExplore your gateway to unforgettable adventures! We specialize in crafting tour packages that turn ordinary trips into extraordinary experiences. Our team is dedicated to providing hassle-free travel with expert guides and seamless logistics, ensuring you create lasting memories at every destination.
</p>
</div>
</section>
 



 <!--Events-->
 <section class="events" id="tours">
    <div class="container">
        <div class="title">
            <h1>Packages</h1>
            <div class="line"></div>
        </div>
        <div class="box">
            <div class="card">
                <img class="card-img" src="./img/package1.jpg" />
                <h4>Goa</h4>
                <p >
                Goa is a place known for its famous beaches, 
                cuisine, culture, climate, and historical places. 
                </p>
                <!-- <a href="#" class="bttn">All Details</a> -->
            </div>
            <div class="card">
                <img src="./img/package2.jpg" />
            <h4>Kerala</h4>
            <p>
            Kerala is a jewel of enchanting beauty and rich 
            cultural heritage that beckons to be explored.
            </p>
            <a href="tours.php" class="bttn1">View All</a>
        </div>
        <div class="card">
            <img src="./img/package3.jpg" />
            <h4>Thailand</h4>
            <p>
            Thailand offers a perfect mix of every factor 
            needed for a fun-filled vacation for tourists across the world
            </p>
            <!-- <a href="#" class="bttn">All Details</a> -->
        </div>
    </div>
</div>
</section>
<!--Events-->
<!-- <div >

<a href="#" class="view-all">View All</a>
</div> -->


<!-- contact us -->

<div class="footer" id="footer">
<!-- <div class ="title">
    <h1>GlobExplore</h1>
    </div> -->
    <div class="box1">
    <h1>GLOBEXPLORE</h1>
    <h4>Discover amazing journeys with us. We specialize in crafting unique travel experiences. Explore our handpicked destinations and start creating unforgettable memories. Your adventure begins here!.</h4>
    <h2>Get in Touch</h2>


        <div class="email">
        <a href="#">
       <p>Email: globexplore@gmail.com</p>
        </a>
        </div>
        <div class="phone">
        <a href="#">
        <p>  Call: 1800200200</p>

        </a>
        </div>
        <!-- <h1>Social</h1> -->
        <div class="social">
        <a href="">
            <!-- <p>Our Instagram</p> -->
            
            <img src="./img/i1.png" alt=""></a>
            <a href="">
            <img src="./img/i2.png" alt="" ></a>
            <a href="">
            <img src="./img/i3.png" alt="" ></a>

        </div>
    </div>
    </div>
</div>
<div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="#">GlobExplore</a>. All Rights Reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Sitemap</a>
          </li>

        </ul>

        <!-- <div class="payment">
          <p class="payment-title">We Support</p>

          <img src="./assets/images/payment-img.png" alt="Online payment logos" class="payment-img">
        </div> -->

      </div>
    </div>


<!-- <?php include('includes/sigin.php');?>	 -->
</body>

</html>