<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBEXPLORE</title>
    <link rel="stylesheet" href="css/style.css?v=11">
    <!-- <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> -->
    <!-- favicon -->
    <link rel="icon" 
    sizes="32*32"
    href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">

</head>
<body>


<header>
        <!-- <div class="header-img" style="background-image: url(./img/pexels-archie-binamira-913215.jpg);"></div> -->
        <div class="header-content">
            <h2 >Let's Travel The World Together</h2>
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
                        <a href="eventsdetails.php?pkgid=1" class="bttn">All Details</a>
                    </div>
                    <div class="card">
                        <img src="./img/card2.jpg" />
                    <h4>Lakshadweep</h4>
                    <p class="font-color">
                        Settled off the Kerala coast on Laccadive sea, Lakshadweep . 
                        A club of 36 islands, a nature tourism destination.
                    </p>
                    <a href="eventsdetails.php?pkgid=2" class="bttn">All Details</a>
                </div>
                <div class="card">
                    <img src="./img/card3.jpg" />
                    <h4>Sahara Desert</h4>
                    <p class="font-color">
                        Embark on the best desert safari in Dubai and try thrilling activities,
                         enjoy BBQ meals, round trip transfers etc.
                    </p>
                    <a href="eventsdetails.php?pkgid=3" class="bttn">All Details</a>
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
            <a href="packagedetails.php?pkgid=7">
                <img class="card-img" src="./img/package1.jpg" /></a>
                <h4>Goa</h4>
                <p >
                Goa is a place known for its famous beaches, 
                cuisine, culture, climate, and historical places. 
                </p>
                <!-- <a href="#" class="bttn">All Details</a> -->
            </div>
            <div class="card">
                <a href="packagedetails.php?pkgid=2">
                <img src="./img/package2.jpg" /></a>
          
            <h4>Kerala</h4>
            <p>
            Kerala is a jewel of enchanting beauty and rich 
            cultural heritage that beckons to be explored.
            </p>
            <a href="packages.php" class="bttn1">View All</a>
        </div>
        <div class="card">
        <a href="internationaldetails.php?pkgid=6">
            <img src="./img/package3.jpg" /></a>
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


 <?php include("footer.php");?>	
</body>

</html>