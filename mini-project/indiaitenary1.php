<?php
session_start();
error_reporting(0);
include 'adminconfig.php';
include 'dbconnect.php';
include 'navbar.php';
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itenary</title>
    <link rel="stylesheet" href="css/details.css?v=4">

</head>
<body>
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from india where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
<header >
<img class="card-img" src="uploads/<?php echo htmlentities($result->PackageTtd2Image);?>"  alt=""></a>
    </header>
    <div class="effect">
        <div class ="header-title">
        <h1><?php  echo htmlentities($result->PackageTtd2Name);?></h1>
        <!-- </div> -->
        <!-- <div class="header-content"> -->
        <p><?php  echo htmlentities($result->PackageDetails);?></p>        </div>
        </div>
        







<!-- <section>
    <div class="tour1">
    <img class="card-img" src="./img/package1.jpg" />
    <h1>
        Vietnam
    </h1>

    </div>



</section> -->

    <div class="links">
        <a href="#day1">Day 1</a>
        <a href="#day2">Day 2</a>
        <a href="#day3">Day 3</a>
        <a href="#day4">Day 4</a>
        <a href="#day5">Day 5</a>
        <?php 
        if (isset($_SESSION['name'])) 
        {  ?>
      <a href="book2.php?pkgid=<?php echo htmlentities($result->PackageId);?>" > <button class="bttn">Book Now</button></a>
        <?php  }
        else{?>
        
        <!-- <button class="bttn" id="ok">Book Now</button> -->
        
        <button  onclick="alert('Login First')" class="bttn">Book Now</button> 
       
            
       <?php }?>

    </div>
<!-- <h1 id="things">Things to do</h1> -->
<!-- <h1 id="time">Best Time to visit</h1> -->


<section class="events" id="day1">
            <div class="container">
                <div class="title">
                    <h1 > Day 1</h1>
                    <!-- <div class="line"></div> -->
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <img class="card-img" src="./img/packages/vietnam1.avif" /> -->
                        
                        <p><?php  echo htmlentities($result->Package2Day1);?></p>    
                    </div>
                </div>
            </div></section>
                </div>
            </div></section>


<section class="events" id="day2">
            <div class="container">
                <div class="title">
                    <h1 >Day 2 </h1>
                    <!-- <div class="line"></div> -->
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <img class="card-img" src="./img/packages/vietnam1.avif" /> -->
                        <p><?php  echo htmlentities($result->Package2Day2);?></p> 
                        </div>
                </div>
            </div></section>
                </div>
            </div></section>

                        <section class="events" id="day3">
            <div class="container">
                <div class="title">
                    <h1 >Day 3 </h1>
                    <!-- <div class="line"></div> -->
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <img class="card-img" src="./img/packages/vietnam1.avif" /> -->
                        <p><?php  echo htmlentities($result->Package2Day3);?></p> 
                        </div>
                </div>
            </div></section>
                </div>
            </div></section>

                        <section class="events" id="day4">
            <div class="container">
                <div class="title">
                    <h1 >Day 4</h1>
                    <!-- <div class="line"></div> -->
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <img class="card-img" src="./img/packages/vietnam1.avif" /> -->
                        <p><?php  echo htmlentities($result->Package2Day4);?></p> 
                        </div>
                </div>
            </div></section>
                </div>
            </div></section>

                        <section class="events" id="day5">
            <div class="container">
                <div class="title">
                    <h1 >Day 5 </h1>
                    <!-- <div class="line"></div> -->
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <img class="card-img" src="./img/packages/vietnam1.avif" /> -->
                        <p><?php  echo htmlentities($result->Package2Day5);?></p> 
                        <?php }} ?>

                    </body>
</html>