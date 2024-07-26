<?php
session_start();
include 'adminconfig.php';
include 'dbconnect.php';
// include 'adminnavbar.php';
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:adminclick.php');
}
else{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="css/style1.css?v=2" type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>

<link href="css/font-awesome.css" rel="stylesheet"> 

<script src="js/jquery-2.1.4.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />


<link rel="icon" 
    sizes="32*32"
    href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">

<style>
    body{
        background-color: black;
    }
    html{
        background-color: black;
    }
</style>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
<!--header start here-->
<!--  -->
<!--header end here-->
		<!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol> -->
<!--four-grids here-->
		<div class="four-grids">
			<a href="users.php" target="_blank">
					<div class="col-md-4 four-grid">
						<div class="four-agileits">
							
							<div class="four-text">
								<h3>User</h3>

								<?php
                                $connection = mysqli_connect('localhost', 'root', '', 'signin');
$result = mysqli_query($connection, "SELECT  COUNT(*) as count
            FROM users"

);

while ($row = mysqli_fetch_array($result)) {

    $var = $row['count'];

   

}


					?>			<h4> <?php  echo  $var ;?> </h4>
				
								
							</div>
							
						</div>
					</div>
				</a>


<a href="trendingpackages.php" target="_blank">
						<div class="col-md-4 four-grid">
						<div class="four-w3ls">
							
							<div class="four-text">
								<h3>Trending Packages</h3>
                                <?php
                                $connection = mysqli_connect('localhost', 'root', '', 'admin');
$result = mysqli_query($connection, "SELECT  COUNT(*) as count
            FROM packages"

);

while ($row = mysqli_fetch_array($result)) {

    $var = $row['count'];

   

}


					?>			<h4> <?php  echo $var;?> </h4>	
								
							</div>
							
						</div>
					</div></a>


<a href="internationalpackages.php" target="_blank">
					<div class="col-md-4 four-grid">
						<div class="four-wthree">
							
							<div class="four-text">
								<h3>International packages</h3>
								<?php
                                $connection = mysqli_connect('localhost', 'root', '', 'admin');
$result = mysqli_query($connection, "SELECT  COUNT(*) as count
            FROM international"

);

while ($row = mysqli_fetch_array($result)) {

    $var = $row['count'];

   

}


					?>			<h4> <?php  echo $var;?> </h4>									
								
							</div>
							
						</div>
					</div>
						<div class="clearfix"></div>
				</div>
</a>
	

	<a href="eventpackages.php" target="_blank">
	<div class="four-grids">
			<div class="col-md-4 four-grid">
						<div class="four-agileinfo">
							
							<div class="four-text">
								<h3>Events</h3>
								
								<?php
                                $connection = mysqli_connect('localhost', 'root', '', 'admin');
$result = mysqli_query($connection, "SELECT  COUNT(*) as count
            FROM events"

);

while ($row = mysqli_fetch_array($result)) {

    $var = $row['count'];

   

}
					?>			<h4> <?php  echo  $var ;?> </h4>
											
								
							</div>
							
						</div>
					</div>
				</a>

				<a href="showbook.php" target="_blank">
				<div class="col-md-4 four-grid">
						<div class="four-agileits">
							
							<div class="four-text">
								<h3>Bookings</h3>

								<?php
                                $connection = mysqli_connect('localhost', 'root', '', 'admin');
$result = mysqli_query($connection, "SELECT  COUNT(*) as count
            FROM book"

);

while ($row = mysqli_fetch_array($result)) {

    $var = $row['count'];

   

}
					?>			<h4> <?php  echo  $var ;?> </h4>
				
								
							</div>
							
						</div>
					</div>
				</a>
				<a href="indiapackages.php" target="_blank">
					<div class="col-md-4 four-grid">
						<div class="four-wthree">
							
							<div class="four-text">
								<h3>India packages</h3>
								<?php
                                $connection = mysqli_connect('localhost', 'root', '', 'admin');
$result = mysqli_query($connection, "SELECT  COUNT(*) as count
            FROM india"

);

while ($row = mysqli_fetch_array($result)) {

    $var = $row['count'];

   

}


					?>			<h4> <?php  echo $var;?> </h4>									
								
							</div>
							
						</div>
					</div>
						<div class="clearfix"></div>
				</div>
</a>
	
				


<!--inner block end here-->
<!--copy rights start here-->
<?php include('sidebarmenu.php');?>
</div>
</div>

		
</body>
</html>
<?php 
} ?>