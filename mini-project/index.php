<?php
include 'navbar.php';

// Database connection parameters
$servername = getenv("DB_SERVER");
$username = getenv("DB_USER");
$password = getenv("DB_PASS");
$dbname = getenv("DB_NAME");

$servername2 = getenv("AD_SERVER");
$username2 = getenv("AD_USER");
$password2 = getenv("AD_PASS");
$dbname2 = getenv("AD_NAME");

// Create connection 1
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection 1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to execute SQL file
function executeSQLFile($filename, $conn) {
    $sql = file_get_contents($filename);
    if ($conn->multi_query($sql)) {
        do {
            // Check for more results
            if ($result = $conn->store_result()) {
                $result->free();
            }
        } while ($conn->more_results() && $conn->next_result());
        echo "SQL file $filename executed successfully.<br>";
    } else {
        echo "Error executing $filename: " . $conn->error . "<br>";
    }
}

// Execute the SQL files 1
executeSQLFile('../sql/users.sql', $conn);

// Create connection 2
$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

// Check connection 2
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}

// Execute the SQL files 2
executeSQLFile('../sql/admin.sql', $conn2);



// Close connection
$conn->close();
$conn2->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBEXPLORE</title>
    <link rel="stylesheet" href="css/style.css?v=11">
    <link rel="icon" sizes="32*32" href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">
</head>
<body>

<header>
    <div class="header-content">
        <h2>Let's Travel The World Together</h2>
    </div>
</header>

<section class="events" id="events">
    <div class="container">
        <div class="title">
            <h1>Upcoming Events</h1>
        </div>

        <div class="box">
            <div class="card">
                <img class="card-img" src="./img/card1.jfif" />
                <h4>Everest camp trek</h4>
                <p class="font-color">
                    Everest base camp trek is without a doubt, one of the most renowned travel destinations in the world.
                </p>
                <a href="eventsdetails.php?pkgid=1" class="bttn">All Details</a>
            </div>
            <div class="card">
                <img src="./img/card2.jpg" />
                <h4>Lakshadweep</h4>
                <p class="font-color">
                    Settled off the Kerala coast on Laccadive sea, Lakshadweep is a nature tourism destination.
                </p>
                <a href="eventsdetails.php?pkgid=2" class="bttn">All Details</a>
            </div>
            <div class="card">
                <img src="./img/card3.jpg" />
                <h4>Sahara Desert</h4>
                <p class="font-color">
                    Embark on the best desert safari in Dubai and try thrilling activities, enjoy BBQ meals, round trip transfers etc.
                </p>
                <a href="eventsdetails.php?pkgid=3" class="bttn">All Details</a>
            </div>
        </div>
    </div>
</section>

<section class="explore" id="explore">
    <div class="explore-content">
        <h2>About Us</h2>
        <p>
            Welcome to GlobExplore, your gateway to unforgettable adventures! We specialize in crafting tour packages that turn ordinary trips into extraordinary experiences.
        </p>
    </div>
</section>

<section class="events" id="tours">
    <div class="container">
        <div class="title">
            <h1>Packages</h1>
            <div class="line"></div>
        </div>
        <div class="box">
            <div class="card">
                <a href="packagedetails.php?pkgid=7">
                    <img class="card-img" src="./img/package1.jpg" />
                </a>
                <h4>Goa</h4>
                <p>Goa is a place known for its famous beaches, cuisine, culture, and historical places.</p>
            </div>
            <div class="card">
                <a href="packagedetails.php?pkgid=2">
                    <img src="./img/package2.jpg" />
                </a>
                <h4>Kerala</h4>
                <p>Kerala is a jewel of enchanting beauty and rich cultural heritage.</p>
                <a href="packages.php" class="bttn1">View All</a>
            </div>
            <div class="card">
                <a href="internationaldetails.php?pkgid=6">
                    <img src="./img/package3.jpg" />
                </a>
                <h4>Thailand</h4>
                <p>Thailand offers a perfect mix of every factor needed for a fun-filled vacation for tourists.</p>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php");?>

</body>
</html>
