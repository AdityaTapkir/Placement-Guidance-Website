<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="./styles/index.css" />
   <title>Placement guidance website</title>
   <style media="screen">
     .feedback a{
       text-decoration: none;
     }
   </style>
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



           <?php
            session_start();
            if(isset($_SESSION['username'])) {
           ?>

       <button class="btn" id="right-btn" onclick="window.location.href = './logout.php';"><?php echo $_SESSION['username'] ?></button>
       <?php
     }else {
        ?>
        <button class="btn" id="right-btn" onclick="window.location.href = './logout.php';"> Logout</button>

        <?php
             }
         ?>

         <!-- Hello  , -->
       </div>
     </navbar>
   </header>
