<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href='Images/Img/Illustrated Blood Donor Hospital Logo.png' type="image/png">
    <title>Red Blood</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="CSS/form.css">
    <style>
      /*ABOUT*/
*{
  scroll-behavior: smooth;
}
.about {
  width: 80%;
  margin: auto;
  text-align: center;
  padding-top: 8%;
}

h1 {
  font-size: 30px;
  font-weight: 600;
}

p {
  color: #777;
  font-size: 20px;
  font-weight: 300;
  padding: 10px;
  line-height: 20px;
}

.about-col {
  transition: transform 1s;
  width: 25%;
  display: inline-block;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  border-radius: 5px;
  position: relative;
  background: white;
  margin: 2%;
}

.about-col:hover {
  transform: scale(1.03, 1.03);
}

.image img {
  width: 50%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
}

.about h3 {
  font-family: "Alegreya Sans SC", sans-serif;
}

.about-col p {
  padding: 3px;
  text-align: center;
  padding-top: 10px;
  border-radius: 2.8rem;
  margin: 10px;
  z-index: -1;
  font-family: "NTR", sans-serif;
  font-size: 1.2rem;
}

.heading {
  font-size: 36px;
  font-weight: 600;
  font-family: "Alegreya Sans SC", sans-serif;
}

main {
  background: url(../Images/ug.png);
  z-index: -10;
}

@media screen and (max-width: 540px) {
  .about {
    width: 95%;
    margin: auto;
  }

  .about p {
    padding: 0px;
    margin: 2px;
    font-size: 16px;
  }

  .about-col {
    width: 27%;
  }
}

@media screen and (max-width: 360px) {
  .about {
    width: 95%;
    margin: auto;
  }

  .about p {
    padding: 0px;
    margin: 1.4px;
    font-size: 15px;
    letter-spacing: -0.01rem;
  }

  .about-col {
    width: 28%;
    border-radius: 4px;
    margin: 1.3%;
  }

  .about h3 {
    font-size: 17px;
  }

  .about h1 {
    font-size: 27px;
  }
}

@media screen and (max-width: 400px) {
  .one-line {
    display: none;
  }
}
.container{
    width: 100%;
    height: 100vh;
    background-image: url('Images/Img/Untitled\ design.png');
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
/* ABOUT ENDS */
       </style>
  </head>
  <body>
    <div class="container">
      <nav class="flex">
        <a href="index.php"><img id="logoimg" src="Images/Img/Illustrated Blood Donor Hospital Logo.png" alt="logo"></a>
        <div class="logo"> Red Blood</div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li>
            <a class="scroll" href="#about-us">About Us</a>
          </li>
          <li>
            <a href="register.php">Blood Availability
              <i class="fas fa-caret-down"></i>
            </a>
            
          </li>
          <li>
            <a href="register.php"
            >Add your BloodBank
            <i class="fas fa-caret-down"></i>
          </a>
        </li>
        <li>
          <a href="#"
            >Want to Donate Blood
            <i class="fas fa-caret-down"></i>
            <ul>
              <li><a href="register.php">Blood Donation Camp</a></li>
              <li><a href="Register.php">Donor Login</a></li>
              <li><a href="register.php">Register for VBD Camp</a></li>
              <!-- <li><a href="About_Blood_Donation.php">About Blood Donation</a></li> -->
            </ul>
          </a>
        </li>
        </ul>
    </nav>
    <div class="text-box">
      <h1> Start </h1>
      <h1>Saving Lives </h1>
      <p>Become a donor or request for blood And help save lives</p>
      <?php 
        if(isset($_SESSION['loggedin']))
        {
          echo'<a href="Register.php" class="hero-btn">Log-Out</a>';
        }
        else{
          echo'<a href="Register.php" class="hero-btn">Register</a>';
        }

      ?>
      <!-- <a href="Register.php" class="hero-btn">Register</a> -->
  </div>
  </div>
  <main>
    <section id="about-us">
        <div class="about">
            <h1 class="heading">What is this all about ?</h1> <br>
            <p class="head-des">We solve the problem of blood emergencies by connecting <span class="one-line"><br></span> blood donors directly with people in blood need. </p>
            <div class="row">
                <div class="about-col">
                    <div class="image">
                        <img src="Images/drop.png">
                    </div>
                    <h3>What we do ?</h3>
                    <p>We connect blood donors with recipients, without any intermediary such as blood banks, for an
                        efficient and seamless process.</p>
                </div>
                <div class="about-col">
                    <div class="image">
                        <img src="Images/innovation.png">
                    </div>
                    <br>
                    <h3>Innovative</h3>
                    <p>Blood Buddy is an innovative approach to address global health.We provide <span>immediate
                            access</span> to blood donors.</p>
                </div>
                <div class="about-col">
                    <div class="image">
                        <img src="Images/netwotk.png">
                    </div>
                    <h3>Network</h3>
                    <p>Blood Buddy is one of several community organizations working together as a network that
                        responds to emergencies in an efficient manner.</p>
                </div>
                <div class="about-col">
                    <div class="image">
                        <img src="Images/noti.png">
                    </div>
                    <h3>Get notified</h3>
                    <p>Blood Buddy Connect works with network partners to connect blood donors and recipients
                        through an automated SMS service and a mobile app.</p>
                </div>
                <div class="about-col">
                    <div class="image">
                        <img src="Images/cost.png">
                    </div>
                    <h3>Totally Free</h3>
                    <p>Blood Budyy's ultimate goal is to provide an easy -to-use, easy-to-access, fast, efficient,
                        and reliable way to get life-saving blood, totally <span>Free of cost.</span></p>
                </div>
                <div class="about-col">
                    <div class="image">
                        <img src="Images/save.png">
                    </div>
                    <h3>Save Life</h3>
                    <p>We are a non profit foundation and our main objective is to make sure that everything is done
                        to protect vulnerable persons.<span>Help
                            us by making a gift!</span></p>
                </div>
            </div>
        </div>
    </section>
</main>
<!--REVIEW-->
<section class="customer-review">
  <div class="row-customer">
      <h2>Testimonials<br>See what our users have to say</h2>
  </div>
  <div class="row-customer">
      <div class="col-customer span-1-of-3-customer customer-box">
          <div class="customer-text-box">
              Blood Buddy is just awesome! I just donated for the first time and it could not have been
              easier.Blood Buddy is doing a very important work and I'm happy that I could contribute . It's
              hygienic,safe and convenient, I recommend it to everyone!
          </div>
          <div class="customer">
              <img src="Images/review-3.PNG" alt="Customer photo">
              <p>Nidhi </p>
          </div>
      </div>

      <div class="col-customer span-1-of-3-customer customer-box">
          <div class="customer-text-box">
              I found Blood Buddy at a time that my mother was in urgent need of blood. Blood Buddy arranged the
              required amount in no time. It saved us a lot of hassle and worry especially in such a trying
              time.<br> Thank you Blood Buddy!
          </div>
          <div class="customer">
              <img src="Images/Img/pra.png" alt="Customer photo">
              <p>Pranay Sharma</p>
          </div>
      </div>
      <div class="col-customer span-1-of-3-customer customer-box">
          <div class="customer-text-box">
              I have been a part of this organization for quite some time and each time I'm amazed by the seamless
              and efficient system in place.The importance of timely care especially in the recent times is known
              and having Blood Buddy takes a load off my mind.
          </div>
          <div class="customer">
              <img src="Images/Img/Shahid khan_graphic team member.jpg" alt="Customer photo">
              <p>Shahid khan</p>
          </div>
      </div>
  </div>
</section>

<!--FOOTER-->

<footer>
  <div class="siteFooterBar">
      <div class="content1">
          <div class="foot">2022 © All rights reserved to Shahid Khan</div>
      </div>
  </div>
  <div class="footer-content">
      <h3>JOIN OUR CAUSE</h3>
      <p>Donating blood or platelets can be intimidating and even scary. Time to put those hesitations
          and
          fears
          aside. Learn from Blood Buddy and platelet donors how simple and easy it is to roll up a
          sleeve
          and help
          save lives.</p>
      <div class="socials">
          
                <a href="https://www.instagram.com/shahid_vk18/" target="_blank">
                          <img class ="socials" src="Images/Icon_BG/logo-ig-stunning-instagram-logo-vector-download-for-new-7.png" alt="instagram"></a>
              
              <a href="https://www.linkedin.com/in/md-shahid-khan-1a471b153/" target="_blank"><img class ="socials" src="Images/Icon_BG/174857.png" alt="linkedin"></a>
              <a href="https://github.com/VampsDamon" target="_blank"><img class ="socials" src="Images/Icon_BG/25231.png" alt="github"></a>
              
          
      </div>
  </div>


</footer>
  </body>
</html>
