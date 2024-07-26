<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBEXPLORE</title>
    <link rel="stylesheet" href="css/package.css?v=5">
    <link rel="icon" sizes="32*32" href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">				
</head>
<body>

<?php 
session_start();
error_reporting(0);
include 'adminconfig.php';
include 'navbar.php';



$pid = intval($_GET['pkgid']);
$sql = "SELECT * FROM india WHERE PackageId=:pid";
$query = $dbh->prepare($sql);
$query->bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if($query->rowCount() > 0) {
    foreach($results as $result) {
?>
    <header>
        <img class="card-img" src="uploads/<?php echo htmlentities($result->PackageBgImage);?>" alt="">
    </header>
    <div class="effect">
        <div class="header-title">
            <h1><?php echo htmlentities($result->PackageNameIndia);?></h1>
            <p><?php echo htmlentities($result->PackageDetails);?></p>
        </div>
    </div>
    <div class="links">
        <a href="#things">Things To do</a>
        <a href="#time">Best time</a>
        <a href="#know">Features</a>
    </div>
    <section class="events" id="things">
        <div class="container">
            <div class="title">
                <h1>Things to do</h1>
            </div>
            <div class="box">
                <div class="card">
                    <img class="card-img" src="uploads/<?php echo htmlentities($result->PackageTtd1Image);?>" alt="">
                    <h4><?php echo htmlentities($result->PackageTtd1Name);?></h4>
                    <ul class="font-color">
                        <li>3 Star Hotel</li>
                        <li>Airport Pickup & Drop</li>
                        <li>5 Activities</li>
                        <li>Visa</li>
                        <li>Selected Meals</li>
                    </ul>
                    <p>&#x20B9;<?php echo htmlentities($result->PackagePrice);?></p>
                    <a href="indiaitenary.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="bttn">All Details</a>
                </div>
                <div class="card">
                    <img class="card-img" src="uploads/<?php echo htmlentities($result->PackageTtd2Image);?>" alt="">
                    <h4><?php echo htmlentities($result->PackageTtd2Name);?></h4>
                    <ul class="font-color">
                        <li>3 Star Hotel</li>
                        <li>Airport Pickup & Drop</li>
                        <li>5 Activities</li>
                        <li>Visa</li>
                        <li>Selected Meals</li>
                    </ul>
                    <p>&#x20B9;<?php echo htmlentities($result->PackagePrice);?></p>
                    <a href="indiaitenary1.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="bttn">All Details</a>
                </div>
            </div>
        </div>
    </section>
    <section id="time">
        <div class="title">
            <h1>Best Time to Visit</h1>
        </div>
        <div class="best-time">
            <p><?php echo htmlentities($result->PackageBestTime);?></p>
        </div>
    </section>
    <section id="know">
        <div class="title">
            <h1>Features</h1></div>
            <div class="best-time">
            <p><?php echo htmlentities($result->PackageFetures);?></p>
    
        </div>
        <div class="faqs"></div>
    </section>



    
<?php 
    } // End of foreach
} // End of if
?>
</body>
</html>
