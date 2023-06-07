<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>City Government of Calapan Document Tracking System</title>
  <link rel="icon" href="images/CGCDTSLOGO.png" type="image/x-icon">

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="login.php">
            <div class="img-box box-3">
              <img src="images/CGCDTSLOGO.png" alt="">
            </div>
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
  </div>

  <!-- business section -->

  <section class="business_section layout_padding">
    <div class="container">
      <h2>
        City Government of Calapan
      </h2>
      <p>
        The City Government of Calapan oversees the administration and
        services of Calapan City in Oriental Mindoro, Philippines.
        Led by the Mayor and City Council, it provides essential
        programs in education, healthcare, infrastructure, public safety,
        and economic development. Transparency, accountability, and
        public engagement are key values, and collaborations with various
        stakeholders support the city's growth.
      </p>
    </div>
    <div class="business_container">
      <div class="content-box box-1">
        <div class="detail">
          <h3>
            VISION
          </h3>
          <p>
            METRO CALAPAN 2026: MIMAROPA’s</br>
            Premier of Investments and </br>
            Agro-industry.</br>
          </p>
        </div>
      </div>
      <div class="content-box box-2">
        <div class="detail">
          <h3>
            MISSION
          </h3>
          <p>
            The City of Calapan shall initiate and </br>
            sustain programs to create an environment </br>
            conducive to development and progress </br>
            thru transparent and participatory </br>
            governance.</br>
          </p>
        </div>

      </div>
      <div class="content-box box-3">
        <div class="detail">
          <h3>
            City Government of </br>
            Calapan Offical Website</br>
          </h3>
          <p>
            Explore the official website of the City Government </br>
            of Calapan for up-to-date information on </br>
            governance, development projects, and </br>
            community initiatives. </br>
            Access government services, programs, and resources </br>
            that cater to the needs of our vibrant city. Stay </br>
            informed and engaged with the latest news and </br>
            updates from Calapan City's administration.</br>
          </p>
        </div>
        <div>
          <a href="https://cityofcalapan.gov.ph/">
            Visit Site
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end business section -->


  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="info-logo">
      <h2>
        CGCDTS
      </h2>
    </div>
    <div class="container">
      <h4>
        Contact us
      </h4>
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Brgy. Guinobatan, Calapan City, Oriental Mindoro
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +63 9485598856
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                citygovernmentofcalapan@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="partner-box">

    </div>
  </section>



  <!-- end info_section -->

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