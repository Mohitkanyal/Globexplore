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

		$pdetails = $_POST['packagedetails'];
		$pday1 = $_POST['packageday1'];
		$pday2 = $_POST['packageday2'];
		$pday3 = $_POST['packageday3'];
		$pday4 = $_POST['packageday4'];
		$pday5 = $_POST['packageday5'];
		$pbgimage = $_FILES["packagebgimage"]["name"];
		
		$path = "./uploads";
	
		// Generate unique filenames
		
		$pbg_filename = time() . '_' . $pbgimage;
		
	
		// SQL query to insert data
		$sql = "INSERT INTO events (PackageName, PackageDetails,PackageDay1, PackageDay2, PackageDay3, PackageDay4, PackageDay5, PackageBgImage) VALUES (:pname, :pdetails,:pday1, :pday2, :pday3, :pday4, :pday5, :pbgimage)";
	
		// Prepare and execute the query
		$query = $dbh->prepare($sql);
		$query->bindParam(':pname', $pname, PDO::PARAM_STR);
		$query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
		$query->bindParam(':pday1', $pday1, PDO::PARAM_STR);
		$query->bindParam(':pday2', $pday2, PDO::PARAM_STR);
		$query->bindParam(':pday3', $pday3, PDO::PARAM_STR);
		$query->bindParam(':pday4', $pday4, PDO::PARAM_STR);
		$query->bindParam(':pday5', $pday5, PDO::PARAM_STR);
		$query->bindParam(':pbgimage', $pbg_filename, PDO::PARAM_STR);
		
	
		if($query->execute()) {
			// Move uploaded files to the destination directory
			
			move_uploaded_file($_FILES["packagebgimage"]["tmp_name"], $path . '/' . $pbg_filename);
			
	
			$msg = "Package Created Successfully";
			header("location: index.php");
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
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Location Details</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Location Details" required></textarea> 
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
									<label for="focusedinput" class="col-sm-2 control-label"style="color:white">Package background Image</label>
									<div class="col-sm-8">
										<input type="file" name="packagebgimage" id="packagebgimage" required>
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