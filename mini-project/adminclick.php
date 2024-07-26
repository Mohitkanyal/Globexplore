<?php
// include 'adminconfig.php';
include 'navbar.php';
include 'dbconnect.php';

 
// $email = $err_msg = "";  
if (isset($_POST['submit'])) {   
	$username = ($_POST['username']);
	$password = ($_POST['password']);
	
	// $password = md5($password);
	
	
	$sql = "select * from login where username = ? and password = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ss", $username, $password);
	if ($stmt->execute()){
		$result = $stmt->get_result();
		if ($result->num_rows >0) {
			$row = $result->fetch_assoc();
            $_SESSION['alogin']=$_POST['username'];
			// $_SESSION['name'] = $row['name'];
			// $_SESSION['userid'] = $email;
			header("location:dashboard.php");
		}
		else 
			$err_msg = "Incorrect Email id/Password";
	}
	else 
		$err_msg = "Some Error occurred";
}
?>	

<link rel="stylesheet" href="css/sample.css?v=4">
<section class="login">
<div class="form login">
    <div class="form-content">
		<h1>Admin Login</h1>
<form class="form-1" action="adminclick.php" method ="post">
  
  

  <div class="text">
    <!-- <label>Email Id</label> -->
    <input type = "text" class="input" name="username" id = "username"  placeholder ="Enter your Email Id" required>
  </div>

  <div class="text	" >
    <!-- <label>Password</label> -->
    <input type = "password" class="input" name="password" id = "password" placeholder ="Enter Password" required>
  </div>

  
  <div class="button">
    <button type="submit" class="btn" name="submit">Login</button>
  </div>
  
 	
  
</div>
</form>
</section>
