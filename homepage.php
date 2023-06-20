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





  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrapss.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/styless.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsivess.css" rel="stylesheet" />
<link rel="stylesheet" href="css/homepage.css">



  <link rel="stylesheet" href="css/css-circular-prog-bar.css">

  <style>
    .error {
    text-align: center;
    background: #f59595fb;
    color: #b92c2c;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
}
  </style>


</head>

<body>
  <div class="top_container">
    <!-- header section  -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">

          <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="" style="width: 150px; height: auto;">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="homepage.php"> Home <span class="sr-only">(current)</span></a>
                </li>
             
                <li class="nav-item">
                  <a class="nav-link" href="program.php"> Program </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="student_enrollment.php">Enroll Now</a>
                </li>

                <li class="nav-item">
                  <button class="btn btn-primary" onclick="showLoginPopup()">Log in</button>
                </li>

              </ul>

            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">

          <h1>
            Welcome to Banisil National High School
          </h1>
          <div class="hero_btn-continer">
          </div>
        </div>
        <!-- popup Login form -->

        <!-- popup Login form -->
        <?php
        session_start();
        include 'dbcon.php';

        if (isset($_POST['btnLogin'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (empty($username)) {
                header("Location: homepage.php?error=Username must be filled");
                exit();
            } elseif (empty($password)) {
                header("Location: homepage.php?error=Password must be filled");
                exit();
            } else {
              $sql = "SELECT tbl_userinfo.user_id, tbl_usercredentials.username, tbl_usercredentials.password, tbl_user_level.level, tbl_user_status.status
              FROM tbl_userinfo
              JOIN tbl_usercredentials ON tbl_userinfo.user_id = tbl_usercredentials.userinfo_id
              JOIN tbl_user_level ON tbl_userinfo.user_id = tbl_user_level.userinfo_id
              JOIN tbl_user_status ON tbl_userinfo.user_id = tbl_user_status.userinfo_id
              WHERE tbl_user_level.level IN ('STUDENT', 'ADMIN') AND tbl_user_status.status = 1
              AND tbl_usercredentials.username = '$username'";
      
              $result = mysqli_query($conn, $sql);
              
              if ($result && mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  $storedPassword = $row['password'];
                  $userLevel = $row['level'];
              
                  if (password_verify($password, $storedPassword) && $row['status'] == 1) {
                      // Store user information in session variables
                      $_SESSION['user_id'] = $row['user_id'];
                      $_SESSION['username'] = $username;
                      $_SESSION['user_level'] = $userLevel;
              
                      if ($userLevel === 'STUDENT') {
                          header("Location: student_schedule.php");
                          exit();
                      } elseif ($userLevel === 'ADMIN') {
                          header("Location: admin_dashboard.php?");
                          exit();
                      }
                  }
              }
                header("Location: homepage.php?error=Invalid username or password");
                exit();
            }
        }
        ?>

        <div id="loginPopup" class="login_popup">
          <div class="login_content">
            <h3>Login</h3>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>
            <form action="#" method="POST">
              <!-- Add your login form fields here -->
              <input type="text" placeholder="Username" name="username">
              <input type="password" placeholder="Password" name="password">
              <button type="submit" name="btnLogin">Login</button>
            </form>
            <span class="close_btn" onclick="closeLoginPopup()">&times;</span>
          </div>
        </div>
        <!-- End popup login form -->

        <!-- End popup login form -->

      </div>
  </div>
  </section>
  </div>
  <!-- end header section -->



  <!-- principal section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading">
        Our Principal
      </h2>

      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <div class="card">
            <div class="card-body d-flex align-items-center justify-content-center">
              <img class="card-img-top" src="img/principal.png" alt="Card image cap"
                style="width: 500px; height: auto;">
            </div>
            <div class="card-body">
              <h5 class="card-title">EDDIE H. ATAY</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  </section>

  <!-- teacher section -->

  <!-- vehicle section -->
  <section class="vehicle_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
        Strand/Program we offer
      </h2>

      <div class="layout_padding-top">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="vehicle_img-box ">
                <img src="img/abm.png" alt="" class="img-fluid w-100">
              </div>
            </div>
            <div class="carousel-item">
              <div class="vehicle_img-box ">
                <img src="img/humss.jpg" alt="" class="img-fluid w-100">
              </div>
            </div>
            <div class="carousel-item">
              <div class="vehicle_img-box ">
                <img src="img/stem.jpg" alt="" class="img-fluid w-100">
              </div>
            </div>
            <div class="carousel-item">
              <div class="vehicle_img-box ">
                <img src="img/tvl.jpg" alt="" class="img-fluid w-100">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>
  </section>





  <!-- end contact section -->











  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Banisil National High School
      <a href="https://html.design/"></a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'img/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>

  <script>
function showLoginPopup() {
  var loginPopup = document.getElementById("loginPopup");
  loginPopup.style.display = "block";
  setTimeout(function() {
    loginPopup.classList.add("show");
  }, 100);
}

function closeLoginPopup() {
  var loginPopup = document.getElementById("loginPopup");
  loginPopup.classList.remove("show");
  setTimeout(function() {
    loginPopup.style.display = "none";
  }, 500);
}

  </script>


</body>

</html>