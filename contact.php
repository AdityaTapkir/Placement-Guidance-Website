
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Form </title>
    <link rel="stylesheet" href="./styles/contact.css">
</head>
<body>
    <h1 id="title">Contact Us</h1>
    <p id="description">Thank you for taking the time to help us improve the platform</p>
    <form action="/contact" method="post" id="survey-form">

        <label for="name" id="name-label">Name</label>
        <input type="text" id="name" name="myname" placeholder="Enter your Name" required />

        <label for="email" id="email-label">Email</label>
        <input type="email" id="email" name="myemail" placeholder="Enter your Email" required />

        <label for="number" id="number-label">Age</label>
        <input type="number" id="number" min="10" max="99" name="myage" placeholder="Enter your Age" required />

        <label for="select" id="select-label" name="myoption">Select your level when joining the classes</label>
        <select name="" id="dropdown">
            <option selected disabled value="disabled">Select current level</option>
            <option value="student">Fresher</option>
            <option value="full-time">Experienced</option>
            <option value="part-time">Not much Experienced</option>
        </select>




        <label for="fav-feature-dropdown" id="fav-feature-label">What you need help with?</label>
        <select name="" id="fav-feature-dropdown" name="mypopularity">
            <option selected disabled>Select an option</option>
            <option value="Projects">Doubts</option>
            <option value="Questions">Classes</option>
            <option value="Interface">Interview</option>
        </select>

        <label for="improvement">Which plan you are interested in considering (Check all that apply)</label>

        <label ><input type="checkbox" id="Front-end-projects" value="Front-end" name="myplan" /> Full mentorship + All classes</label>


        <label><input type="checkbox" name="" id="Back-end Projects" value="Back-end" name="myplan" /> Only mentorship</label>

        <label><input type="checkbox" name="" id="Back-end Projects" value="DV" name="myplan" />All classes</label>

        <label id="last"><input type="checkbox" name="" id="Challenges" value="Challenges" name="myplan" />Weekly Classes</label>

        <label for="comments">Any comments or suggestions?</label>
        <textarea name="" id="comments" cols="30" rows="10" placeholder="Enter you comment here" name="mycomments"></textarea>

        <input type="submit" id="submit">
    </form>
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
            <img src="./images/footer/Lineage_OS_Logo.png" alt="Logo">
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
              <li class="media3"  title="Instagram">
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
            <p>Copyrights<sup>&copy;</sup> 2023. Developed with <i class="fas fa-heart" style="color: red;"></i> by Aditya</p>
          </div>
        </div>
      </footer>
</body>
</html>
