<?php

include 'navbar.php';
include 'dbconnect.php';

 
$email = $err_msg = "";  
if (isset($_POST['submit'])) {   
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	
	$password = md5($password);
	
	
	$sql = "select * from users where email = ? and password = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ss", $email, $password);
	if ($stmt->execute()){
		$result = $stmt->get_result();
		if ($result->num_rows >0) {
			$row = $result->fetch_assoc();
			$_SESSION['name'] = $row['name'];
			$_SESSION['userid'] = $email;
			header("location:index.php");
		}
		else 
			$err_msg = "Incorrect Email id/Password";
	}
	else 
		$err_msg = "Some Error occurred";
}
?>	

<link rel="stylesheet" href="css/sample.css?v=1">
<section class="login">
<div class="form login">
    <div class="form-content">
		<h1>Login</h1>
<form class="form-1" action="sample.php" method ="post">
  
  <?php if ($err_msg !="") ?>
  <p class="err-msg"><?php echo $err_msg; $err_msg ="";?></p>

  <div class="text">
    <!-- <label>Email Id</label> -->
    <input type = "text" class="input" name="email" id = "email" value="<?php echo $email;?>" placeholder ="Enter your Email Id" required>
  </div>

  <div class="text	" >
    <!-- <label>Password</label> -->
    <input type = "password" class="input" name="password" id = "password" placeholder ="Enter Password" required>
  </div>

  
  <div class="button">
    <button type="submit" class="btn" name="submit">Login</button>
  </div>
  <div class="link">
    <p>Don't have a account?
	        
 <a href="signup.php" class="signup">Signup</a>
	</p>
  </div>	
 	
  
</div>

</form>
</section>
