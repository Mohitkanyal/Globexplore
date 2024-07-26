<?php
session_start();
error_reporting(0);
include 'adminconfig.php';
include 'dbconnect.php';
include 'sidebarmenu.php';
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
<title>Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style1.css?v=13" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- favicon -->
<link rel="icon" 
    sizes="32*32"
    href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">

<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
   </script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->

<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info" style="margin-top: -25px;">
					  <!-- <h2 style="color:white">Booking</h2> -->
					    <table id="table">
						<thead>
						  <tr>
						  <th>#</th>
                          <!-- <th>Package Id<th> -->
							<th>First Name</th>
                            <th>MiddleName</th>
                            <th>Last Name</th>
                            <th>Contact</th>
							<th>Email Id</th>
						  </tr>
						</thead>
						<tbody>
                        <?php
$connection = mysqli_connect('localhost', 'root', '', 'admin');
$result = mysqli_query($connection, "SELECT  * FROM book"
// $connection = mysqli_connect('localhost', 'root', '', 'admin');
// $result = mysqli_query($connection, "SELECT  * FROM packages"

);

while ($row = mysqli_fetch_array($result)) {

    // $var = $row['email'];
    echo "<tr><td>" . $row["id"].   " </td><td>" .$row["firstname"]. "</td><td>" .$row["middlename"]. "</td><td>".$row["lastname"]. "</td><td>".$row["contact"]."</td><td>".$row["email"] ;
     }
	 
	 $connection = mysqli_connect('localhost', 'root', '', 'admin');
	 $result = mysqli_query($connection, "SELECT  * FROM book1"
	 // $connection = mysqli_connect('localhost', 'root', '', 'admin');
	 // $result = mysqli_query($connection, "SELECT  * FROM packages"
	 
	 );
	 
	 while ($row = mysqli_fetch_array($result)) {
	 
		 // $var = $row['email'];
		 echo "<tr><td>" . $row["id"]. "</td><td>".$row["PackageId"] ."</td><td>" .  " </td><td>" .$row["firstname"]. "</td><td>" .$row["middlename"]. "</td><td>".$row["lastname"]. "</td><td>".$row["contact"]."</td><td>".$row["email"] ;
		  }

}


					?>			


		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>


</body>
</html>
<?php ?>