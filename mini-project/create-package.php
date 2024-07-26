<?php
session_start();

include 'adminconfig.php';
// include 'navbar.php';
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:adminclick.php');
}
else{
	
	if(isset($_POST['submit'])) {
		$pname = $_POST['packagename'];
		$pprice = $_POST['packageprice'];
		$pfeatures = $_POST['packagefeatures'];
		$pdetails = $_POST['packagedetails'];
		$pbesttime = $_POST['packagebesttime'];
		
		$pttd1name = $_POST['packagettd1name'];
		$pttd1image = $_FILES["packagettd1image"]["name"];
		$pday1 = $_POST['packageday1'];
		$pday2 = $_POST['packageday2'];
		$pday3 = $_POST['packageday3'];
		$pday4 = $_POST['packageday4'];
		$pday5 = $_POST['packageday5'];
		$pttd2name = $_POST['packagettd2name'];
		$pttd2image = $_FILES['packagettd2image']["name"];
		$p2day1 = $_POST['package2day1'];
		$p2day2 = $_POST['package2day2'];
		$p2day3 = $_POST['package2day3'];
		$p2day4 = $_POST['package2day4'];
		$p2day5 = $_POST['package2day5'];
		$pbgimage = $_FILES["packagebgimage"]["name"];
		$pimage = $_FILES["packageimage"]["name"];
	
		
		$path = "./uploads";
	
		// Generate unique filenames
		$pttd1_filename = time() . '_' . $pttd1image;
		$pttd2_filename = time() . '_' . $pttd2image;
		$pbg_filename = time() . '_' . $pbgimage;
		$pimage_filename = time() . '_' . $pimage;
	
		// SQL query to insert data
		$sql = "INSERT INTO packages (PackageName, PackagePrice, PackageFetures, PackageDetails, PackageBestTime, PackageTtd1Name, PackageTtd1Image, PackageDay1, PackageDay2, PackageDay3, PackageDay4, PackageDay5, PackageTtd2Name, PackageTtd2Image, Package2Day1, Package2Day2, Package2Day3, Package2Day4, Package2Day5, PackageBgImage, PackageImage) VALUES (:pname, :pprice, :pfeatures, :pdetails, :pbesttime,:pttd1name, :pttd1image,:pday1, :pday2, :pday3, :pday4, :pday5, :pttd2name, :pttd2image,:p2day1, :p2day2, :p2day3, :p2day4, :p2day5, :pbgimage, :pimage)";
	
		// Prepare and execute the query
		$query = $dbh->prepare($sql);
		$query->bindParam(':pname', $pname, PDO::PARAM_STR);
		$query->bindParam(':pprice', $pprice, PDO::PARAM_STR);
		$query->bindParam(':pfeatures', $pfeatures, PDO::PARAM_STR);
		$query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
		$query->bindParam(':pbesttime', $pbesttime, PDO::PARAM_STR);
		$query->bindParam(':pttd1name', $pttd1name, PDO::PARAM_STR);
		$query->bindParam(':pttd1image', $pttd1_filename, PDO::PARAM_STR);
		$query->bindParam(':pday1', $pday1, PDO::PARAM_STR);
		$query->bindParam(':pday2', $pday2, PDO::PARAM_STR);
		$query->bindParam(':pday3', $pday3, PDO::PARAM_STR);
		$query->bindParam(':pday4', $pday4, PDO::PARAM_STR);
		$query->bindParam(':pday5', $pday5, PDO::PARAM_STR);
		$query->bindParam(':pttd2name', $pttd2name, PDO::PARAM_STR);
		$query->bindParam(':pttd2image', $pttd2_filename, PDO::PARAM_STR);
		$query->bindParam(':p2day1', $p2day1, PDO::PARAM_STR);
		$query->bindParam(':p2day2', $p2day2, PDO::PARAM_STR);
		$query->bindParam(':p2day3', $p2day3, PDO::PARAM_STR);
		$query->bindParam(':p2day4', $p2day4, PDO::PARAM_STR);
		$query->bindParam(':p2day5', $p2day5, PDO::PARAM_STR);
		$query->bindParam(':pbgimage', $pbg_filename, PDO::PARAM_STR);
		$query->bindParam(':pimage', $pimage_filename, PDO::PARAM_STR);
	
		if($query->execute()) {
			// Move uploaded files to the destination directory
			move_uploaded_file($_FILES["packagettd1image"]["tmp_name"], $path . '/' . $pttd1_filename);
			move_uploaded_file($_FILES["packagettd2image"]["tmp_name"], $path . '/' . $pttd2_filename);
			move_uploaded_file($_FILES["packagebgimage"]["tmp_name"], $path . '/' . $pbg_filename);
			move_uploaded_file($_FILES["packageimage"]["tmp_name"], $path . '/' . $pimage_filename);
	
			$msg = "Package Created Successfully";
			header("location: packages.php");
		} else {
			$error = "Something went wrong. Please try again";
		}
	}
	?>
	<!DOCTYPE HTML>
<html>
<head>
<title>Package Creation</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
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
<div class="left-content">
	   <div class="mother-grid-inner">
   
							
				     <div class="clearfix"> </div>	
				</div>

 
<!---->
<div class="grid-form1">
  	       <h3 style="color:white">Create Package</h3>
  	        	  
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label" style="color:white">Package Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagename" id="packagename" placeholder="Create Package" required>
									</div>
								</div>


<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Package Price</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder=" Package Price " required>
									</div>
								</div>

                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Package Features</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packagefeatures" id="packagefeatures" placeholder="Package Features" required></textarea> 
									</div>
								</div>	


<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Location Details</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Location Details" required></textarea> 
									</div>
								</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Best time</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packagebesttime" id="packagebesttime" placeholder="Package Best Time" required></textarea> 
									</div>
</div>				

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Things To Do Title</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagettd1name" id="packagettd1name" placeholder="Title" required>
									</div>
								</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Things To Do Image</label>
									<div class="col-sm-8">
										<input type="file" name="packagettd1image" id="packagettd1image" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Itenary Day 1</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packageday1" id="packageday1" placeholder="Day 1 Itenary" required></textarea> 
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Itenary Day 2</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packageday2" id="packageday2" placeholder="Day 2 Itenary" required></textarea> 
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Itenary Day 3</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packageday3" id="packageday3" placeholder="Day 3 Itenary" required></textarea> 
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Itenary Day 4</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packageday4" id="packageday4" placeholder="Day 4 Itenary" required></textarea> 
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Itenary Day 5</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packageday5" id="packageday5" placeholder="Day 5 Itenary" required></textarea> 
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Things To Do Title</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagettd2name" id="packagettd2name" placeholder="Title" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Things To Do Image</label>
									<div class="col-sm-8">
										<input type="file" name="packagettd2image" id="packagettd2image" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Itenary Day 1</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="package2day1" id="package2day1" placeholder="Day 1 Itenary" required></textarea> 
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Itenary Day 2</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="package2day2" id="package2day2" placeholder="Day 2 Itenary" required></textarea> 
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Itenary Day 3</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="package2day3" id="package2day3" placeholder="Day 3 Itenary" required></textarea> 
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Itenary Day 4</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="package2day4" id="package2day4" placeholder="Day 4 Itenary" required></textarea> 
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Itenary Day 5</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="package2day5" id="package2day5" placeholder="Day 5 Itenary" required></textarea> 
									</div>
								</div>		
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Package background Image</label>
									<div class="col-sm-8">
										<input type="file" name="packagebgimage" id="packagebgimage" required>
									</div>
								</div>										
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Package Image</label>
									<div class="col-sm-8">
										<input type="file" name="packageimage" id="packageimage" required>
									</div>
								</div>	

								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="btn-primary btn"style="color:white">Create</button>

				
			</div>
		</div>
						
					
						
						
						
					</div>
					
					</form>

     
      

      
     
 	<!--//grid-->

<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php  }?>