

<?php
session_start();
// error_reportings(0);
include 'adminconfig.php';
include 'dbconnect.php';
// include 'sidebarmenu.php';
if(strlen($_SESSION['alogin']) == 0) {  
    header('location:adminclick.php');
} 
else {
$pid = intval($_GET['pid']);  
if(isset($_POST['submit'])) 
{
        $pname = $_POST['packagenameindia'];
        $pprice = $_POST['packageprice'];
        $pfeatures = $_POST['packagefeatures'];
        $pdetails = $_POST['packagedetails'];
        $pbesttime = $_POST['packagebesttime'];
        $pday1 = $_POST['packageday1'];
        $pday2 = $_POST['packageday2'];
        $pday3 = $_POST['packageday3'];
        $pday4 = $_POST['packageday4'];
        $pday5 = $_POST['packageday5'];
		$p2day1 = $_POST['package2day1'];
        $p2day2 = $_POST['package2day2'];
        $p2day3 = $_POST['package2day3'];
        $p2day4 = $_POST['package2day4'];
        $p2day5 = $_POST['package2day5'];
        // $pttd1name = $_POST['packagettd1name'];
        // $pttd1image = $_FILES["packagettd1image"]["name"];
        // $pttd2name = $_POST['packagettd2name'];
        // $pttd2image = $_FILES['packagettd2image']["name"];
        // $pbgimage = $_FILES["packagebgimage"]["name"];
        // $pimage = $_FILES["packageimage"]["name"];
		// $sql = "INSERT INTO packages (PackageName, PackagePrice, PackageFetures, PackageDetails, PackageBestTime, PackageTtd1Name, PackageTtd1Image, PackageDay1, PackageDay2, PackageDay3, PackageDay4, PackageDay5, PackageTtd2Name, PackageTtd2Image, Package2Day1, Package2Day2, Package2Day3, Package2Day4, Package2Day5, PackageBgImage, PackageImage) VALUES (:pname, :pprice, :pfeatures, :pdetails, :pbesttime,:pttd1name, :pttd1image,:pday1, :pday2, :pday3, :pday4, :pday5, :pttd2name, :pttd2image,:p2day1, :p2day2, :p2day3, :p2day4, :p2day5, :pbgimage, :pimage)";

		$sql = "UPDATE india SET PackageNameIndia = :pname, PackagePrice = :pprice, PackageFetures = :pfeatures, PackageDetails = :pdetails, PackageBestTime = :pbesttime, PackageDay1 = :pday1, PackageDay2 = :pday2, PackageDay3 = :pday3, PackageDay4 = :pday4, PackageDay5 = :pday5, Package2Day1 = :p2day1, Package2Day2 = :p2day2, Package2Day3 = :p2day3, Package2Day4 = :p2day4, Package2Day5 = :p2day5 WHERE PackageId = :pid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':pname', $pname, PDO::PARAM_STR);
        $query->bindParam(':pprice', $pprice, PDO::PARAM_STR);
        $query->bindParam(':pfeatures', $pfeatures, PDO::PARAM_STR);
        $query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
        $query->bindParam(':pbesttime', $pbesttime, PDO::PARAM_STR);
        $query->bindParam(':pday1', $pday1, PDO::PARAM_STR);
        $query->bindParam(':pday2', $pday2, PDO::PARAM_STR);
        $query->bindParam(':pday3', $pday3, PDO::PARAM_STR);
        $query->bindParam(':pday4', $pday4, PDO::PARAM_STR);
        $query->bindParam(':pday5', $pday5, PDO::PARAM_STR);
		$query->bindParam(':p2day1', $p2day1, PDO::PARAM_STR);
        $query->bindParam(':p2day2', $p2day2, PDO::PARAM_STR);
        $query->bindParam(':p2day3', $p2day3, PDO::PARAM_STR);
        $query->bindParam(':p2day4', $p2day4, PDO::PARAM_STR);
        $query->bindParam(':p2day5', $p2day5, PDO::PARAM_STR);
        // $query->bindParam(':pttd1name', $pttd1name, PDO::PARAM_STR);
        // $query->bindParam(':pttd1image', $pttd1_filename, PDO::PARAM_STR);
        // $query->bindParam(':pttd2name', $pttd2name, PDO::PARAM_STR);
        // $query->bindParam(':pttd2image', $pttd2_filename, PDO::PARAM_STR);
        // $query->bindParam(':pbgimage', $pbg_filename, PDO::PARAM_STR);
        // $query->bindParam(':pimage', $pimage_filename, PDO::PARAM_STR);
        $query->bindParam(':pid', $pid, PDO::PARAM_INT);

        if($query->execute()) {
            $msg = "Package Updated Successfully";
           
        } else {
            $error = "Error updating package";
        }
    }

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Package Updation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style1.css?v=6" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- favicon -->
<link rel="icon" 
    sizes="32*32"
    href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">

    <style>
		body{
            background-color: black;
        }
        html
        {
            background-color: black;
        }
		</style>

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->

				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	
<h3 style="color:white">Update Package</h3>
						
<?php 
$pid=intval($_GET['pid']);
$sql = "SELECT * from india where PackageId=:pid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data"
                            action="updateindia.php?pid=<?php echo htmlentities($result->PackageId);?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label" style="color:white">Package Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagenameindia" id="packagenameindia" placeholder="Create Package" value="<?php echo htmlentities($result->PackageNameIndia);?>" required>
									</div>
								</div>
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label" style="color:white">Package Price</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder=" Package Type eg- Family Package / Couple Package" value="<?php echo htmlentities($result->PackagePrice);?>" required>
									</div>
								</div>


<!--  -->

                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Package Features</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packagefeatures" id="packagefeatures" placeholder="Package Details" required><?php echo htmlentities($result->PackageFetures);?></textarea> 
									</div>
								</div>		


<div class="form-group">    
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Package Details</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Package Details" required><?php echo htmlentities($result->PackageDetails);?></textarea> 
									</div>
								</div>		
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Package Best Time</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packagebesttime" id="packagebesttime" placeholder="Package Details" required><?php echo htmlentities($result->PackageBestTime);?></textarea> 
									</div>
								</div>		
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">1st Location Day 1</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packageday1" id="packageday1" placeholder="Package Details" required><?php echo htmlentities($result->PackageDay1);?></textarea> 
									</div>
								</div>		
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">1st Location Day 2</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packageday2" id="packageday2" placeholder="Package Details" required><?php echo htmlentities($result->PackageDay2);?></textarea> 
									</div>
								</div>		
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">1st Location Day 3</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packageday3" id="packageday3" placeholder="Package Details" required><?php echo htmlentities($result->PackageDay3);?></textarea> 
									</div>
								</div>	
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">1st Location Day 4</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packageday4" id="packageday4" placeholder="Package Details" required><?php echo htmlentities($result->PackageDay4);?></textarea> 
									</div>
								</div>	
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">1st Location Day 5</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packageday5" id="packageday5" placeholder="Package Details" required><?php echo htmlentities($result->PackageDay5);?></textarea> 
									</div>
								</div>		
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">2st Location Day 1</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="package2day1" id="package2day1" placeholder="Package Details" required><?php echo htmlentities($result->Package2Day1);?></textarea> 
									</div>
								</div>		
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">2st Location Day 2</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="package2day2" id="package2day2" placeholder="Package Details" required><?php echo htmlentities($result->Package2Day2);?></textarea> 
									</div>
								</div>		
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">2st Location Day 3</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="package2day3" id="package2day3" placeholder="Package Details" required><?php echo htmlentities($result->Package2Day3);?></textarea> 
									</div>
								</div>		
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">2st Location Day 4</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="package2day4" id="package2day4" placeholder="Package Details" required><?php echo htmlentities($result->Package2Day4);?></textarea> 
									</div>
								</div>		
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">2st Location Day 5</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="package2day5" id="package2day5" placeholder="Package Details" required><?php echo htmlentities($result->Package2Day5);?></textarea> 
									</div>
								</div>		


</div>
</div>


								<?php }} ?>

								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="btn-primary btn">Update</button>
			</div>
		</div>
						
					
						
						
						
					</div>
					
					</form>

     
      

      
      
</body>
</html>
<?php } ?>  