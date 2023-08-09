<?php
if(isset($_POST['register'])){
include "config.php";

$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$course=mysqli_real_escape_string($conn,$_POST['course']);
$batch= $_POST['batch'];
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,md5($_POST['password']));

$sql="SELECT email from alumini where email='{$email}'";
$result=mysqli_query($conn,$sql) or die("Query Failed");

if(mysqli_num_rows($result)>0){
  echo "<p style='color:red;text-align:center;margin: 10px 0;'>Username already exists</p>";
}else {
  $sql1="INSERT INTO alumini(fname,lname,username,email,password,course,batch)
          VALUES('{$fname}','{$lname}','{$username}','{$email}','{$password}','{$course}','{$batch}')";
  if(mysqli_query($conn,$sql1)){
    header("Location: http://localhost/Placement_Guidance_Website/aluminregistration.php");
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
  <div class="form-box" style="overflow:auto">
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


      <input type="email" name="email" class="input-field" placeholder="email" required />
      <input type="password" name="password" class="input-field" placeholder="Enter Password" required />

      <input type="checkbox" class="check-box" /><span>Remember Password</span>
      <button type="submit" name="login" class="submit-btn">Log In</button>
    </form>
    <?php
    if(isset($_POST['login'])){
      include "config.php";

      $email= $_POST['email'];
      $password=md5($_POST['password']);

      echo $sql="SELECT AID, username  FROM alumini WHERE email= '{$email}' AND password='{$password}'";
      $result=mysqli_query($conn,$sql) or die("Query Failed");

      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
          session_start();
          $_SESSION['username']=$row['username'];
          $_SESSION['aluminiid']=$row['AID'];



          header("Location: http://localhost/Placement_Guidance_Website/Testimonial.php");
        }
      }else{
        echo '<div class="alert alert-danger">Username and Password are not matched</div>';
      }
    }
     ?>

    <form id="register" class="input-group" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <input type="text" name="fname" class="input-field" placeholder="fname" required />
      <input type="text" name="lname" class="input-field" placeholder="lname" required />
      <input type="text" name="username" class="input-field" placeholder="uname" required />
      <input type="email" name="email" class="input-field" placeholder="Enter Email" required />
      <input type="password" name="password" class="input-field" placeholder="Enter Password" required />
      <input type="text" name="batch" class="input-field" placeholder="batch" required />
      <input type="text" name="course" class="input-field" placeholder="course" required />
        <br>

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
