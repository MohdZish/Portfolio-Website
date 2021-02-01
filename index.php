<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>ABDUL WAHAB</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>

<script type="text/javascript">

    AOS.init({
      once: true,
      duration: 1500,  //FUNCTION FOR  ANIMATION FADE IN WHILE SCROLLING !!!
    });

    var project = setInterval(projectDone, 200)
    let count1 = 1;

    function projectDone() {
        count1++
        document.querySelector("#projectscounter").innerHTML = count1
            if (count1 == 20) {
                clearInterval(project)
            }
        }
  </script>


    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section" >
        <div class="container-fluid">
          <div class="row" >
            <div class="col-md-11 offset-md-1 px-0" >
              <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                <a class="navbar-brand" href="index.html">
                  <span>
                  </span>
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="collapse navbar-collapse"
                  id="navbarSupportedContent"
                >
                  <div
                    class="d-flex ml-auto flex-column flex-lg-row align-items-center"
                  >
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link pl-0" href="index.html"
                          >Home <span class="sr-only">(current)</span></a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html"> About </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="work.html">My Projects </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="blog.html"> My Github </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">my CV</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Me</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- end header section -->

      <!-- slider section -->
      <div class="slider_section mt-md-5" >
        <div
          id="carouselExampleControls"
          class="carousel slide pb-5"
          data-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-5 offset-lg-1" data-aos="fade-right">
                    <div class="detail-box">
                      <div class="heading_box">
                        <h3>Hey, I'm</h3>
                        <h2>Mohammed</h2>
                        <h2>Zishan</h2>
                        <h1 class="mt-2">
                          Web and Software Developer
                        </h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 px-0" data-aos="fade-left">
                    <div class="row align-items-center justify-content-center mt-md-5" >
                      <div class="projectscounter" id="projectscounter">100</div>

                    </div>
                    <div class="row align-items-center justify-content-center">
                      <div class="lead text-light mb-5 mb-md-0">Cool Projects</div>
                    </div>
                      
                  </div>

                  <div class="col-md-3">
                    <div class="card mb-5 mt-md-5" href="https://github.com/MohdZish" data-aos="fade-right">
                        <div class="card-body">
                            <div class="align-self-center">
                              <div  class="githublogo font-large-2 float-left" src="../images/prev.png"></div>
                            </div>
                            <div class="media-body text-right">
                              <h3>GitHub</h3>
                              <span>Check my repositories</span>
                            </div>
                        </div>
                      </div>

                      <div class="card" href="https://github.com/MohdZish" data-aos="fade-left">
                        <div class="card-body">
                            <div class="align-self-center">
                              <div  class="githublogo font-large-2 float-left" src="../images/prev.png"></div>
                            </div>
                            <div class="media-body text-right">
                              <h3>GitHub</h3>
                              <span>Check my repositories</span>
                            </div>
                        </div>
                      </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider_btn-container mt-5" >
          <a
            class="carousel-control-prev"
            href="#carouselExampleControls"
            role="button"
            data-slide="prev" 
          >
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleControls"
            role="button"
            data-slide="next"
          >
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <!-- end slider section -->
    </div>
    <!-- end hero area -->



    <!-- project section -->
    <div class="container-fluid ">
      <div class="col-sm-10 container-fluid mb-5" data-aos="fade-up">
        <div class="row align-items-center row justify-content-center mt-5">
            <div class="headingtext">   My Projects  </div>
            </div>
            <p class="lead text-center mt-2" style="color: black">Check out all my projects!</p>
            <div class="row cardrow">
            <?php
                include_once("db_connect.php");
                $sql = "SELECT PName, PDesc, MainImage, Theme, Language, Type FROM projectdata";

                function colorgiver($name) {
                              $color = "white";
                              if(strpos($name, "Web Dev")!== false) $color="SpringGreen";
                              if(strpos($name, "Soft Dev")!== false) $color="SpringGreen";
                              if(strpos($name, "Data Science")!== false) $color="SpringGreen";
                              if(strpos($name, "Game Dev")!== false) $color="SpringGreen";
                              if(strpos($name, "Design")!== false) $color="SpringGreen";
                              if(strpos($name, "HTML")!== false) $color="SpringGreen";
                              if(strpos($name, "CSS")!== false) $color="SpringGreen";
                              if(strpos($name, "JS")!== false) $color="SpringGreen";
                              if(strpos($name, "Bootstrap")!== false) $color="SpringGreen";
                              if(strpos($name, "Python")!== false) $color="SpringGreen";
                              if(strpos($name, "C")!== false) $color="SpringGreen";
                              if(strpos($name, "C++")!== false) $color="SpringGreen";
                              if(strpos($name, "C#")!== false) $color="SpringGreen";
                              if(strpos($name, "SQL")!== false) $color="SpringGreen";
                              if(strpos($name, "WPF")!== false) $color="SpringGreen";
                              return $color;
                            }

                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                while( $record = mysqli_fetch_assoc($resultset) ) {
                ?>
                

                  <div class="col-lg-4 col-md-5 col-12">
                    <div class="card cardt mt-4">
                      <img class="card-img-top" type="submit" form="sendtopage" name="submit" src="<?php echo $record['MainImage']; ?>">
                      <input type="hidden" name="ProjectName" value="<?php echo $record['PName']; ?>" style="max-width: 50px;">
                      <div class="card-body">
                        <h4 class="card-title">
                          <?php echo $record['PName']; ?>                        
                        </h4>
                        <p class="card-text">
                          <?php echo $record['PDesc']; ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          
                          <div class="row justify-content-end">
                            <?php 
                              $theme = $record['Theme']; #all themes given in a project
                      
                              $allthemes = explode(",", $theme);

                              foreach($allthemes as $currenttheme){
                                $curtheme = $currenttheme;
                                echo "<k class='solid themeelement' class='colortags' style='font-family: Roboto!important;  background-color: ".colorgiver($currenttheme)."; color: black;'>{$curtheme}</k>";
                              }
                              ?>
                          </div>
                          <div class="btn-group">
                            <form action="ViewProject.php" id="sendtopage" enctype='multipart/form-data' method="POST" id="my-form" style="margin-bottom: 0px;">
                              <input type="submit" name="submit" value="View" class="btn btn-primary"></input>
                              <input type="hidden" name="ProjectName" value="<?php echo $record['PName']; ?>" style="max-width: 50px;">
                            </form>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
 
                  
                <?php } ?> 
            </div>
        </div>
      </div>


      <div class="col-sm-2"></div>
    </div>
    

    <!-- end project section -->

    <!-- expand section -->

    <section class="expand_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/expand-img.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <h2>
                Expand your horizons, explore ours. It's all here. It's only
                here.
              </h2>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
                The point of using LoremIt is a long established fact that a
                reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <script  src="js/jquery-3.4.1.min.js"></script>
    <script  src="js/bootstrap.js"></script>

    <script>
      function openNav() {
        document.getElementById("myNav").style.width = "100%";
      }

      function closeNav() {
        document.getElementById("myNav").style.width = "0%";
      }
    </script>
  </body>
</html>
