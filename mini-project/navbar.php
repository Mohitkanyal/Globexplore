<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBEXPLORE</title>
    <link rel="stylesheet" href="css/navbar.css?v=7">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- favicon -->
    <link rel="icon" 
    sizes="32*32"
    href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">

</head>
<body>

<!-- navbar -->

    <nav class="navbar" >
        <span><a >
            <img
                    class="logo1"
                    src="./img/logo (2).png"/> 
                
                <h1 class="logo">GLOBEXPLORE</h1></a
            ></span>

         
        
         <ul class="nav-links">
            <li>
                <a href="index.php" id="one" >Home</a>
            </li>
            <li>
                <a href="index.php#events" id="two" >Events</a>
            </li>
            <li>
                <a href="index.php#explore" id="three">About</a>
            </li>
            <li>
                <a href="packages.php" id="four">Tours</a>
            </li>
            <!-- <li>
                <a href="#about" id="five">About</a></li>
            </li> -->
            <li>
                <a href="index.php#footer" id="five">Contact</a>
            </li>
            
            <!-- <li>
                <a href="sample.php
                " id="seven" class="cir_border"
                    >SignIn </a>
                
            </li> -->

            
	  	<!-- <div class="logout">
	  		<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	  	</div> -->
          <?php if (isset($_SESSION['name'])) {  ?>
          <li>
                <a href="logout.php
                " id="seven" class="cir_border"
                    >SignOut </a>
                
            </li>
            <?php }
            
            else { ?>
	  
	  		 <li>
                <a href="sample.php
                " id="seven" class="cir_border"
                    >SignIn </a>
                
            </li>
            
            <?php } ?>
          
            <!-- <li id="user"> -->
            <div class="user">
            <?php if (isset($_SESSION['name']))
            echo$_SESSION['name']; ?>

            <style>

            
            </style>
            </div>
            </ul>

            
            <img src="./img/menu-btn.png" alt="" class="menu-btn" />
     </nav>


