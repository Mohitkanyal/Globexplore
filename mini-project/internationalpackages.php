<?php session_start();
error_reporting(0);
include 'adminconfig.php';
include 'dbconnect.php';
include 'sidebarmenu.php';
// include 'adminnavbasr.php';
if(strlen($_SESSION['alogin'])==0){	
header('location:adminclick.php');
}else{ 
// // Code for deletion
// if($_GET['action']=='delete')
// {
// $id=intval($_GET['id']);
// //$query=mysqli_query($con,"delete from tbltourpackages where PackageId =:id");
// $sql ="delete from tbltourpackages where PackageId =:id";
// $query = $dbh -> prepare($sql);
// $query -> bindParam(':id', $id, PDO::PARAM_STR);
// $query->execute();
//  echo "<script>alert('Package deleted.');</script>";
//  echo "<script>window.location.href='manage-packages.php'</script>";

// }

	?>
<!DOCTYPE HTML>
<html>
<head>
<title>International packages</title>
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
					<div class="w3l-table-info"style="margin-top: -25px;">
					  
					    <table id="table">
						<thead>
						  <tr>
						  <th>#</th>
							<th >Name</th>
							<th>Price</th>
							
							<th>Action</th>
							<th>Update</th>
						  </tr>
						</thead>
						<tbody>
<?php $sql = "SELECT * from international";
$query = $dbh -> prepare($sql);
//$query -> bindParam(':city', $city, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>		
						  <tr>
							
							<td><?php echo htmlentities($result->PackageId);?></td>
							<td><?php echo htmlentities($result->PackageName);?></td>
							<td><?php echo htmlentities($result->PackagePrice);?></td>
							
							
							<td><a href="internationaldetails.php?pkgid=<?php echo htmlentities($result->PackageId);?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">View Details</button></a><br />
							<td><a href="updateinternational.php?pid=<?php echo htmlentities($result->PackageId);?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Update Details</button></a><br />

							</td>
						  </tr>
						 <?php $cnt=$cnt+1;} }?>
						</tbody>
					  </table>
					</div>
				  </table>

				
			</div>
          
			
</body>
</html>
<?php } ?>

