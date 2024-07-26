<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tickets</title>
		<link rel="stylesheet" href="css/tickets.css?v=1">
		<link rel="icon" sizes="32*32" href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">
			
	</head>
	<body>
    

	<?php 
include 'adminconfig.php';
$id = intval($_GET['bkid']);
$sql = "SELECT b.*, p.* FROM book b JOIN india p ON b.PackageId = p.PackageId WHERE b.id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_INT); 
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if($query->rowCount() > 0) {
    foreach($results as $result) { 
?>
    <div class="container">
    <div class="logo1">
            <img src="/img/logo (2).png" alt="">
             <h1 class="logo">GLOBEXPLORE</h1>
        </div>
        <div class="bill">
       
             <div class="image">
             <img src="uploads/<?php echo htmlentities($result->PackageBgImage);?>" alt="">
             </div>
             <div class="details">
                <h1>Id:Bk-<?php echo htmlentities($result->id);?></h1> 
                <h1>Location:<?php echo htmlentities($result->PackageNameIndia);?></h1>
                <h1>Name:<?php echo htmlentities($result->firstname)?><?php echo(" ") ?><?php echo htmlentities($result->lastname);?></h1>
                <!-- <h1></h1> -->
             </div>
             <div class="details">
                <h2>Guest:<?php echo htmlentities($result->guest);?></h2> 
                <h2>Date :<?php echo htmlentities($result->booking_from_date);?> to <?php echo htmlentities($result->booking_till_date);?></h2>
                <h2>Total:&#x20B9;<?php echo htmlentities($result->PackagePrice * $result->guest);?></h2> 
                
             </div>
             </div>
             <p class="admit-one">
			<span>Happy Journey</span>
			<span>Happy Journey</span>
			<span>Happy Journey</span>
		</p>
             <!-- <div class="name"> <h1>Id:56</h1></div>
            <div class="guest"> <h1>Id:56</h1></div> -->
                <!-- <div > -->
                   
<!-- <table id="customers">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
 
</table> -->





    </div>

    <div class="return">

<a href="index.php">Back To Home</a>
    </div>

    </div>
    <?php }}?>
</body>
</html>