<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Testimonial</title>
    <link rel="stylesheet" href="./styles/Testimonial.css" />
  </head>
  <style>
  .feedback{
    text-align: center;
    color: black;
    text-decoration: none;
  }
  </style>
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
      </navbar>
    </header>

    <section class="testimonials-section">
      <div class="container">
        <div class="feedback" style="display:flex; justify-content:space-between">

          <h1 class="feedback1"><a href="feedback.php">Provide your valuable Feedback 😣😏😑🙂😍</a> </h1>
        </div>
        <div class="testimonials-content">
          <div class="testimonials-content__title">
            <h4>Reviewed by Alumni</h4>
            <h2>Student's Testimonials</h2>
            <p>
              <h1>Checkout the reviews by the Alumni</h1>
            </p>
          </div>
          <div class="all-testimonials">
            <?php

              include 'config.php';
              $sql="SELECT * FROM feedback";
              $result=mysqli_query($conn,$sql) or die("query failed");

              if(mysqli_num_rows($result)>0)
              {
                while ($row=mysqli_fetch_assoc($result)) {


              ?>
            <div class="all-testimonials__box">
              <span class="quotes-icon"
                ><i class="fa-solid fa-quote-right"></i
              ></span>
              <p>
                <?php  echo $row['comment'] ?>

              </p>
              <div class="all-testimonials__box__name">
                <div class="all-testimonials__box__name__profile">
                  <img
                    src="./images/Testimonial/user-1.png"
                    alt="user_img"
                  /><span>
                    <h4><?php  echo $row['name'] ?></h4>
                  </span>
                </div>

               <?php
                if(isset($_SESSION['username']))
                {
               if($_SESSION['role'] == 1) {?>
                <form class="" action="areplay.php" method="post">
                    <input type="text" name="replay" value="replay">
                    <input type="hidden" name="id" value="<?php echo $row['FID'] ?>">
                    <input type="submit" name="submit" value=" send">
                </form>
              <?php } 
            }?>

                <?php
                echo "<br>";
                  include "config.php";

                  $sql2="SELECT * FROM afeedback  WHERE UID= '{$row['FID']}' ";
                  $result2=mysqli_query($conn,$sql2) or die("Query Failed");
                  if(mysqli_num_rows($result2)>0){
                     while($row=mysqli_fetch_assoc($result2)) {
                       echo "<br>";

                echo $row['message'] ;
                }
                }
                 ?>

              </div>
            </div>
            <?php
              }
            }else{
              echo "no feedback available";
            }
             mysqli_close($conn);
            ?>

          </div>



        </div>
      </div>
    </section>

    <section class="banner-section">
      <div class="banner-section-container">
        <div class="banner-content">
          <div class="banner-content__text">
            <h2>Lorem ipsum dolor sit amet.!</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur..
              <span>24/7</span> Support.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="download-section">
      <div class="container">
        <div class="download-text">
          <h2>Download our app to get most out of it</h2>
          <p>
            Thrown shy denote ten ladies though ask saw. Or by to he going think
            order event music. Incommode so intention defective at convinced.
            Led income months itself and houses you.
          </p>
          <div class="download-text__btns">
            <img
              alt="download_img"
              src="./images/download/googleapp.e6493904327fe3f9b89c7c75a4f3ae74.svg"
            /><img
              alt="download_img"
              src="./images/download/appstore.35481c6295b0744dfcc00d35874fbdd8.svg"
            />
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="footer-wrap">
        <div class="widgetFooter">
          <h4 class="uppercase">useful links</h4>
          <ul id="footerUsefulLink">
            <li title="About US">
              <span class="usefulLinksIcons">
                <i class="far fa-id-card"></i>
              </span>
              <a>&nbsp;About us</a>
            </li>
            <li title="Our Team">
              <span class="usefulLinksIcons">
                <i class="far fa-handshake"></i>
              </span>
              <a>&nbsp;Our team</a>
            </li>
            <li title="Gallery">
              <span class="usefulLinksIcons">
                <i class="far fa-images"></i>
              </span>
              <a>&nbsp;Gallery</a>
            </li>
            <li title="Contact Us">
              <span class="usefulLinksIcons">
                <i class="far fa-envelope"></i>
              </span>
              <a>&nbsp;Contact us</a>
            </li>
          </ul>
        </div>
        <div class="widgetFooter" id="footerLogo">
          <img src="./images/footer/Lineage_OS_Logo.png" alt="Logo" />
        </div>
        <div class="widgetFooter">
          <h4 class="uppercase">Social media links</h4>
          <ul id="footerMediaLinks">
            <li class="media1" title="Facebook">
              <span class="mediaLinksIcons fb">
                <i class="fab fa-facebook-square"></i>
              </span>
              <a class="fb">&nbsp;facebook</a>
            </li>
            <li class="media2" title="Twitter">
              <span class="mediaLinksIcons twit">
                <i class="fab fa-twitter-square"></i>
              </span>
              <a class="twit">&nbsp;Twitter</a>
            </li>
            <li class="media3" title="Instagram">
              <span class="mediaLinksIcons insta">
                <i class="fab fa-instagram"></i>
              </span>
              <a class="insta">&nbsp;instagram</a>
            </li>
            <li class="media4" title="Github">
              <span class="mediaLinksIcons git">
                <i class="fab fa-github-alt"></i>
              </span>
              <a class="git">&nbsp;Github</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footerCopy">
        <div class="inb">
          <p>
            Copyrights<sup>&copy;</sup> 2023. Developed with
            <i class="fas fa-heart" style="color: red"></i> by Aditya
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
