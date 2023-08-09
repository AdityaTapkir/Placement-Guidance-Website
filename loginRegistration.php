<?php
   include "config.php";
  session_start();
  if(isset($_SESSION["username"])){
            header("Location: http://localhost/Placement_Guidance_Website/index.php");
  }
 ?>

 <?php
if(isset($_POST['register'])){
	include "config.php";

	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,md5($_POST['password']));
  $role=mysqli_real_escape_string($conn,$_POST['role']);

	$sql="SELECT username from register_user where username='{$username}'";
	$result=mysqli_query($conn,$sql) or die("Query Failed");

	if(mysqli_num_rows($result)>0){
		echo "<p style='color:red;text-align:center;margin: 10px 0;'>Username already exists</p>";
	}else {
		$sql1="INSERT INTO register_user (username,email,password,role)
						VALUES('{$username}','{$email}','{$password}','{$role}')";
		if(mysqli_query($conn,$sql1)){
			header("Location: http://localhost/Placement_Guidance_Website/index.php");
		}
	}
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login & Registration Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="style.css"> -->
	<link rel="stylesheet" href="./styles/LoginRegstyle.css">
</head>
<body>

    <header id="header">
        <navbar id="navbar">
          <div class="left-section">
            <a href="/"
              ><img
                src="./images/logo-removebg-preview.png"
                class="logo-img"
                alt="Logo"
            /></a>
          </div>
          <div class="mid-section">
            <ul class="navbar-links">
              <li><a href="./index.php">Home</a></li>
              <li><a href="./courses.php">Courses</a></li>
              <li><a href="./Testimonial.php">Testimonial</a></li>
              <li><a href="./OurTeam.php">OurTeam</a></li>
              <li><a href="./about.php">About</a></li>
              <li><a href="./contact.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="right-section">
            <button class="btn" id="left-btn" onclick="window.location.href = './loginRegistration.php';">Login/Register</button>
            <button class="btn" id="right-btn" onclick="window.location.href = './logout.php';">Logout</button>
            <!-- Hello <?php echo $_SESSION["username"]; ?>,  -->
          </div>
        </navbar>
      </header>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>

			<div class="soical-icons">
				<a href="#"><i class="fa fa-facebook-square  fa-6"></i></a>
				<a href="#"><i class="fa fa-google-plus-square fa-6"></i></a>
				<a href="#"><i class="fa fa-twitter-square fa-6"></i></a>
			</div>

			<form id="login" class="input-group" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<input type="text" name="username" class="input-field" placeholder="User Name" required />
				<input type="password" name="password" class="input-field" placeholder="Enter Password" required />
        <!-- <label for="dropdown" placeholder="Select" ></label>
    			<select id="dropdown" name="role">
					<option value="field" >Select</option>
      			<option value="0" >User</option>
      			<option value="1" >Alumni</option> -->
            <!-- <a href="aluminregistration.php"></a> -->
    			</select><br>
				<input type="checkbox" class="check-box" /><span>Remember Password</span>
				<button type="submit" name="login" class="submit-btn">Log In</button>
			</form>
			<?php
			if(isset($_POST['login'])){
				include "config.php";

				$username=mysqli_real_escape_string($conn,$_POST['username']);
				$password=md5($_POST['password']);

				$sql="SELECT userid,username,role FROM register_user where username='{$username}' AND password='{$password}'";
				$result=mysqli_query($conn,$sql) or die("Query Failed");

				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						session_start();
						$_SESSION['username']=$row['username'];
						$_SESSION['userid']=$row['userid'];
            $_SESSION['role']=$row['role'];

						header("Location: http://localhost/Placement_Guidance_Website/Testimonial.php");
					}
				}else{
					echo '<div class="alert alert-danger">Username and Password are not matched</div>';
				}
			}
			 ?>

			<form id="register" class="input-group" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<input type="text" name="username" class="input-field" placeholder="User Name" required />
				<input type="email" name="email" class="input-field" placeholder="Enter Email" required />
				<input type="password" name="password" class="input-field" placeholder="Enter Password" required />
        <label for="dropdown" name="role"></label>
    			<select id="dropdown" name="role" placeholder="Select" required>
					<option value="field" name="role">Select</option>
      			<option value="0" name="role">User</option>
      			<option value="1" name="role">Alumni</option>
    			</select><br>
				<input type="checkbox" class="check-box" /><span>I agree to the terms & conditions</span>
				<button type="submit" name="register"class="submit-btn">Register</button>
			</form>
		</div>
	</div>



	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}

		function login() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}

	</script>
</body>
</html>
