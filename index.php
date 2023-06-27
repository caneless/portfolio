<!DOCTYPE html>
<html>

<head>
  <title>Julian - Portfolio</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/66577e0cee.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <div class="topbar">
    <div class="logo-container">
      <a href="#"><img src="./img/me.jpg" alt="Logo"></a>
      <h1 class="logo-title">Julian's Portfolio</h1>
    </div>
    <nav class="topbar-menu">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about-me">About Me</a></li>
        <li><a href="#my-skills">Skills</a></li>
        <li><a href="#my-work">Work</a></li>
        <li><a href="#my-prices">Prices</a></li>
        <li><a href="#my-socials">Socials</a></li>
      </ul>
    </nav>
    <div class="dropdown-menu">
      <span class="fa fa-bars"></span>
      <div class="dropdown-content">
        <a href="#home">Home</a>
        <a href="#about-me">About Me</a>
        <a href="#my-skills">Skills</a>
        <a href="#my-work">Work</a>
        <a href="#my-prices">Prices</a>
        <a href="#my-socials">Socials</a>
      </div>
    </div>
  </div>
  <section id="home">
    <div class="hero-container">
      <h1>Welcome to Julian's Portfolio</h1>
      <p>Check out my work below</p>
    </div>
  </section>
  <section id="about-me">
    <div class="container">
      <h2 class="section-title">About Me</h2>
      <div class="profile-picture">
        <img src="./img/me.jpg" alt="Profile Picture">
      </div>
      <div class="about-container">
        <div class="about-text">
          <h1 class="about-title">Hi, I'm Julian!</h1>
          <p>I'm a front-end developer with a passion for creating beautiful and functional websites. I have experience
            with HTML, CSS, and JavaScript. I'm always learning and looking for new challenges, and I love collaborating
            with others to create great projects.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="my-skills">
    <div class="container">
      <h2 class="section-title">Skills</h2>
      <div class="skills-container">
        <div class="skill">
          <h3>Nodejs</h3>
          <div class="progress-bar" style="width: 100%;"><span>100%</span></div>
        </div>
        <div class="skill">
          <h3>JavaScript</h3>
          <div class="progress-bar" style="width: 95%;"><span>95%</span></div>
        </div>
        <div class="skill">
          <h3>HTML</h3>
          <div class="progress-bar" style="width: 85%;"><span>85%</span></div>
        </div>
        <div class="skill">
          <h3>CSS</h3>
          <div class="progress-bar" style="width: 80%;"><span>80%</span></div>
        </div>
      </div>
    </div>
  </section>
  <section id="my-work">
    <div class="container">
      <h2 class="section-title">Work</h2>
      <div class="work-grid">
        <div class="work-item">
          <div class="video">
            <video src="work/work1.mp4" alt="Work 1 video" controls></video>
          </div>
          <h3 class="work-title">Discord setup bot</h3>
        </div>
      </div>
    </div>
  </section>
  <section id="my-prices">
    <div class="container">
      <h2 class="section-title">My Prices</h2>
      <i class="near-value">1USD is around 10NOK</i>
      <div class="prices-container">
        <div class="discord-bots">
          <h3 class="prices-title">Discord Bots</h3>
          <h4 class="price">Simple bot: 250NOK</h4>
          <h4 class="price">Advanced bot: 400NOK</h4>
          <h4 class="price">Custom bot: 500NOK</h4>
          <h4 class="price">Without watermark: 100NOK extra</h4>
          <h4 class="price">Per extra simple item: 35NOK</h4>
          <h4 class="price">Per extra advanced item: 75NOK</h4>
        </div>
      </div>
    </div>
  </section>
  <section id="my-socials">
    <div class="container">
      <h2 class="section-title">My Socials</h2>
      <div class="socials-container">
        <a href="https://twitter.com/julianrs006" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/caneless" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://discord.gg/69qSP5FZFR" target="_blank"><i class="fab fa-discord"></i></a>
      </div>
    </div>
  </section>
  <footer>
    <p>&copy; 2023 Julian. All rights reserved.</p>
  </footer>
  <script>$(document).ready(function () {
      // Add smooth scrolling to all links
      $("a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });</script>
</body>

</html>
