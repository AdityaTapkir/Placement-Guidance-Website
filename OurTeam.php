
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Team</title>
    <link rel="stylesheet" href="./styles/OurTeamStyle.css" />
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
        <div class="testimonials-content">
          <div class="testimonials-content__title">
            <h1>Meet Our Peoples</h1>

            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus
              doloremque harum quo perferendis! Quam molestiae, architecto
              quisquam iure iusto, error voluptatibus, corrupti consequatur
              soluta nobis voluptates facere! Autem, optio? Maiores ab
              repellendus odio culpa facere.
            </p>
          </div>
          <div class="all-testimonials">
            <div class="our-team-box-row">
              <div class="all-testimonials__box">
                <img src="./images/ourTeam/photo1.jpg" alt="" />
                <div class="all-testimonials__box__name">
                  <div class="all-testimonials__box__name__profile">
                    <h4>Director and CEO</h4>
                    <p>Elon Musk</p>
                  </div>
                </div>
              </div>
              <div class="all-testimonials__box">
                <img src="./images/ourTeam/photo1.jpg" alt="" />
                <div class="all-testimonials__box__name">
                  <div class="all-testimonials__box__name__profile">
                    <h4>Director and CEO</h4>
                    <p>Elon Musk</p>
                  </div>
                </div>
              </div>
              <div class="all-testimonials__box">
                <img src="./images/ourTeam/photo1.jpg" alt="" />
                <div class="all-testimonials__box__name">
                  <div class="all-testimonials__box__name__profile">
                    <h4>Director and CEO</h4>
                    <p>Elon Musk</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="our-team-box-row">
              <div class="all-testimonials__box">
                <img src="./images/ourTeam/photo1.jpg" alt="" />
                <div class="all-testimonials__box__name">
                  <div class="all-testimonials__box__name__profile">
                    <h4>Director and CEO</h4>
                    <p>Elon Musk</p>
                  </div>
                </div>
              </div>
              <div class="all-testimonials__box">
                <img src="./images/ourTeam/photo1.jpg" alt="" />
                <div class="all-testimonials__box__name">
                  <div class="all-testimonials__box__name__profile">
                    <h4>Director and CEO</h4>
                    <p>Elon Musk</p>
                  </div>
                </div>
              </div>
              <div class="all-testimonials__box">
                <img src="./images/ourTeam/photo1.jpg" alt="" />
                <div class="all-testimonials__box__name">
                  <div class="all-testimonials__box__name__profile">
                    <h4>Director and CEO</h4>
                    <p>Elon Musk</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="our-team-box-row">
              <div class="all-testimonials__box">
                <img src="./images/ourTeam/photo1.jpg" alt="" />
                <div class="all-testimonials__box__name">
                  <div class="all-testimonials__box__name__profile">
                    <h4>Director and CEO</h4>
                    <p>Elon Musk</p>
                  </div>
                </div>
              </div>
              <div class="all-testimonials__box">
                <img src="./images/ourTeam/photo1.jpg" alt="" />
                <div class="all-testimonials__box__name">
                  <div class="all-testimonials__box__name__profile">
                    <h4>Director and CEO</h4>
                    <p>Elon Musk</p>
                  </div>
                </div>
              </div>
              <div class="all-testimonials__box">
                <img src="./images/ourTeam/photo1.jpg" alt="" />
                <div class="all-testimonials__box__name">
                  <div class="all-testimonials__box__name__profile">
                    <h4>Director and CEO</h4>
                    <p>Elon Musk</p>
                  </div>
                </div>
              </div>
            </div> -->
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
