<?php
session_start();
error_reporting(0);
include 'adminconfig.php';
include 'navbar1.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBEXPLORE</title>
    <!-- <link rel="stylesheet" href="css/tours.css"> -->
    <link rel="stylesheet" href="css/tours.css?v=9">

    <!-- favicon -->
    <link rel="icon" 
    sizes="32*32"
    href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">

    

</head>
<body>
    <header>
    </header>

<!--- banner ---->
<!-- <div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS- Package List</h1>
	</div>
</div> -->
<!--- /banner ---->
<!--- rooms ---->
<!-- <div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<h3>Package List</h3> -->
<section class="events" id="tours">
<div class="container">
<div class="title">
            <h1>Trending Packages</h1>
        </div>
					
<?php $sql = "SELECT * from packages";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<div class="box">
            <div class="card">
            <!-- <a href="kashmir.php"> -->
                <a href="packagedetails.php?pkgid=<?php echo htmlentities($result->PackageId);?>" >
					<img class="card-img" src="uploads/<?php echo htmlentities($result->PackageImage);?>"  alt=""></a>
					<h4><?php echo htmlentities($result->PackageName);?></h4>
                    
            </div>
<?php }} ?>
</div>
</div>
</section>
<section class="events" id="tours">
<div class="container">
<div class="title">
            <h1>International Packages</h1>
        </div>
					
<?php $sql = "SELECT * from international";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<div class="box">
            <div class="card">
                
            <!-- <a href="kashmir.php"> -->
                <a href="internationaldetails.php?pkgid=<?php echo htmlentities($result->PackageId);?>" >
					<img class="card-img" src="uploads/<?php echo htmlentities($result->PackageImage);?>"  alt=""></a>
					<h4><?php echo htmlentities($result->PackageName);?></h4>
            </div>
					

        

<?php }} ?>
</div>
</div>
</section>
	
<div class="banner">
<img src="./img/ladakh.png">
</div>

<section class="events" id="tours">
<div class="container">
<div class="title">
            <h1>Bharat Yatra</h1>
        </div>
					
<?php $sql = "SELECT * from india";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<div class="box">
            <div class="card">
            <!-- <a href="kashmir.php"> -->
                <a href="indiadetails.php?pkgid=<?php echo htmlentities($result->PackageId);?>" >
					<img class="card-img" src="uploads/<?php echo htmlentities($result->PackageImage);?>"  alt=""></a>
					<h4><?php echo htmlentities($result->PackageNameIndia);?></h4>
                    
            </div>
					
           

<?php }} ?>
</div>
</div>
</section>
<?php include 'footer.php';?>
        

</body>
</html>