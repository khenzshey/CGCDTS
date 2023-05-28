<?php require_once 'includes/header.php' ?>

<div class="hero_area">
  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
          <span>
            CGCDTS
          </span>
        </a>

        <div class="navbar-collapse" id="">
          <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center mt-3">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="login.php">
                  <span>Login</span>
                </a>
              </li>
            </ul>
            <form class="form-inline mb-3 mb-lg-0  mr-5">
              <button class="btn  my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="overlay-content">
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="business.php">City Government of Calapan</a>
              <a href="more.php">More</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
  <!-- slider section -->
  <section class=" slider_section position-relative">

    <div class="container">


      <div class="carousel-item active">
        <div class="slider_item-container">
          <div class="slider_item-detail">
            <h1>
              City Government of Calapan <br />
              <span>Document Tracking System</span>
            </h1>
            <div class="d-flex justify-content-center ">
              <form action="">
                <input type="text" placeholder="Enter your document ID" />
                <button type="track">
                  Track
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="sr-only">Next</span>
</a>
</section>
<!-- end slider section -->
</div>



<!-- footer section -->
<section class="container-fluid footer_section">
  <p>
    &copy;
    <?php echo date("Y"); ?> All Rights Reserved. Design by CAPSTONE TEAM GROUP 1 - City College of Calapan
  </p>
</section>
<!-- footer section -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script>
  function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width");
    document
      .querySelector(".custom_menu-btn")
      .classList.toggle("menu_btn-style");
  }
</script>
</body>

</html>