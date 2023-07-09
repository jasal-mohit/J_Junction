<html>

<head>
  <title>JOURNEY JUNCTION</title>
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <?php
    include("header.php");
    ?>
    <div id="home" style="background:
                          linear-gradient(rgba(70, 20, 40, 0.5), 
                          rgba(50, 50, 40, 0.5)), url('images/001.jpg');
  background-size: 100% 100%;">
      <h3 style="color:#F4EEFF">Welcome to</h3>
      <h1 class=" cityname">Udaipur</h1>
      <h4 class="citynickname">The City of Lakes<h4>
    </div>

    <div class="slider">
      <h1>Destinations</h1>
      <img src="images/111.jpg">
      <img src="images/222.jpg">
      <img src="images/333.jpg">
      <img src="images/444.jpg">
      <img src="images/555.jpg">
      <img src="images/666.jpg">
    </div>

    <div id="adventure">
      <h1>Adventures</h1>
      <div class="adv-container">
        <div class="adv-carousel">
          <figure> <img src="images/111.jpg"> </figure>
          <figure> <img src="images/222.jpg"> </figure>
          <figure> <img src="images/333.jpg"> </figure>
          <figure> <img src="images/444.jpg"> </figure>
          <figure> <img src="images/555.jpg"> </figure>
          <figure> <img src="images/666.jpg"> </figure>
          <figure> <img src="images/777.jpg"> </figure>
          <figure> <img src="images/888.jpg"> </figure>
          <figure> <img src="images/999.jpg"> </figure>
        </div>
      </div>
    </div>


    <?php
    include("hotel.php");
    ?>


    <div id="food">
      <h1>Food</h1>
    </div>

    <div id="reach">
      <h1>Reach</h1>
      <a href="https://www.ixigo.com/flights" target="_blank">
        <div class="transport">
          <h3>Flight</h3>
          <img src="images/svg/T001.svg" />
        </div>
      </a>

      <a href="https://www.ixigo.com/trains">
        <div class="transport">
          <h3>Train</h3>
          <img src="images/svg/T002.svg" />
        </div>
      </a>

      <a href="https://www.ixigo.com/buses">
        <div class="transport">
          <h3>Bus</h3>
          <img src="images/svg/T003.svg" />
        </div>
      </a>

    </div>

    <div id="contact">
      <div class="fleft">
        <h2>Contact Us</h2>
        <p>
          Lucky Institute, Jodhpur<br />
          +91 0987654321<br />
          journeyjunction@gmail.com<br />
          jjmembers_mssr@gmail.com<br />
        </p>
      </div>
      <div class="fright">
        <form class="form">
          <input type="text" placeholder="Email" /><br />
          <input type="password" placeholder="Password" /><br />
          <input type="button" value="Login" />
          Subscribe Letter for Trip offers
        </form>
      </div>

      <div>
        <iframe class="fbottom" src="https://www.google.com/maps/embed?pb=!4v1688733934668!6m8!1m7!1s-WVRR_9pyCNOpsVAVdk0FQ!2m2!1d26.28495125340065!2d72.98800096128231!3f12.536556973849878!4f3.5276824125871684!5f0.7820865974627469" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</body>

</html>



<!-- 
        <nav role="navigation">
          <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
              <a href="#">
                <li>Home</li>
              </a>
              <a href="#">
                <li>About</li>
              </a>
              <a href="#">
                <li>Info</li>
              </a>
              <a href="#">
                <li>Contact</li>
              </a>
              <a href="https://erikterwan.com/" target="_blank">
                <li>Show me more</li>
              </a>
            </ul>
          </div>
        </nav>



        <details>
        <summary>Menu</summary>
        <div><a href="#"> Hello</a></div>
        <div><a href="#"> Hello</a></div>
        <div><a href="#"> Hello</a></div>
        <div><a href="#"> Hello</a></div>
      </details>
-->