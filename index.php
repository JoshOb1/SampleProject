<?php
	try{
		if (!file_exists('anti_ddos/start.php'))
			throw new Exception ('anti_ddos/start.php does not exist');
		else
			require_once('anti_ddos/start.php');
	}
	//CATCH the exception if something goes wrong.
	catch (Exception $ex) {
		echo '<div style="padding:10px;color:white;position:fixed;top:0;left:0;width:100%;background:black;text-align:center;">The <a href="https://github.com/sanix-darker/antiddos-system" target="_blank">"AntiDDOS System"</a> failed to load properly on this Web Site, please de-comment the \'catch Exception\' to see what happening!</div>';
		//Print out the exception message.
		//echo $ex->getMessage();
	}
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\index.css">
  <link rel="icon" type="image/png" href="img/MainLogo.png"/>
  <title>ANANAS E-SPORT</title>
</head>
<body>
	
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero" id="Banner"><img src="img\Banner.png" width="50" height="50"></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#home" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Our Teams</a></li>
            <li><a href="#projects" data-after="Projects">Our Staff</a></li>
            <li><a href="#contact" data-after="Contact">Contact us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="home">
    <div class="home container">
      <div>
        <h1>Welcome, <span></span></h1>
        <h1>We are <span></span></h1>
        <h1>ANANAS E-SPORT <span></span></h1>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Our Te<span>a</span>mes</h1>
        <p>Best of the bests</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/nolan/64/league-of-legends.png"/></div>
          <h2>League Of Legends</h2>
          <p>Recruitements are open</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/nolan/64/valorant.png"/></div>
          <h2>VALORANT</h2>
          <p>Pàt <br> Jibe</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/nolan/64/rocket-league.png"/></div>
          <h2>Rocket League</h2>
          <p>Recruitements are open</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://www.proguides.com/public/media/instacoach/teamfight-tactics/game-icon.png"/></div>
          <h2>TFT</h2>
          <p> Rready <br> Dautom <br> LeBabos <br> Twisky </p>
        </div>
      </div>
      <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/nolan/64/football2.png"/></div>
          <h2>FIFA</h2>
          <p>OmbreShoot92950</p>
        </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Our <span>Staff</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Maelstani</h1>
            <h2>Fondator</h2>
            <p></p>
          </div>
          <div class="project-img">
            <img src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/40/40dd0012eebaceb4e6800080a849005a40cce04f_full.jpg">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Westunts</h1>
            <h2>Fondator</h2>
            <p></p>
          </div>
          <div class="project-img">
            <img src="https://media.discordapp.net/attachments/701935101759455323/743876170721788015/Westunts146.png">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Shinobli</h1>
            <h2>Fondator</h2>
            <p></p>
          </div>
          <div class="project-img">
            <img src="https://media.discordapp.net/attachments/743567946257006632/744174422939664514/Genn_Grisetete_HS.png?width=479&height=641">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Dems</h1>
            <h2>CEO ANANAS E-SPORT</h2>
            <p></p>
          </div>
          <div class="project-img">
            <img src="https://64.media.tumblr.com/d344a9bd8f847835274bfc99a58e4e91/tumblr_oiw129OTop1smgixho1_400.gif">
          </div>
        </div>
        <div class="project-item">
        </div>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>us</span></h1></div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/nolan/64/email.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>ananas.esport.pro@gmail.com</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>ANANAS ESPORT</h1></div>
      <h2>Have <b>Fun</b> before you <b>Tryhard</b></h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://discord.gg/Ehy4gwG"><img src="https://img.icons8.com/color/48/000000/discord-new-logo.png"/></a>
        </div>
		<div class="social-item">
          <a href="https://twitter.com/AnanasEsport"><img src="https://img.icons8.com/dusk/64/000000/twitter.png"/></a>
        </div>
      </div>

      <p>Copyright © 2020 ANANAS ESPORT. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>
</html>
