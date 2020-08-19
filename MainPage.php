<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="MainPage.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        
    </head>
    <body>
      
      

      <! –– Navigation bar -->
        <nav class="navbar  navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link mpbutton" href="MainPage.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link mpbutton" href="#">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mpbutton" href="#">Contact</a>
              </li>
              <li class="nav-item pull-right">
                <a class="nav-link mpbutton" href="Login.html">Login</a>
              </li>
            </ul>
          </div>
        </nav>
        <! –– Navigation bar End -->
        <! -- Page front -->
        <div class="jumbotron frontpage text-center bor">
        <div class="container  maincontainer">
          <h1 class="jumbotron-heading font-weight-bold" style="color: white">Hello, I'm Zishan.</h1>
          <p class="lead" style="color: white">Something short and leading about the collection below it's contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <div class="container mpc">
            <a href="#" class="mpbutton2">Projects</a>
            <a href="#" class="mpbutton2">Contact</a>
          </div>
            
            
        </div>
      </div>
      <! -- Page Front End -->
          <!--<div class="projectbgback"></div>-->
          <div class="container-fluid shadow-lg projectbg rounded">
            <div class="row align-items-center row justify-content-center">
              <p class="sectionheading text-center align-items-center">   My Projects  </p>
              <img class="imgheader" src="/Wallpaper/sb.gif" style="width: 25px; height: 25px;" >
            </div>
            <p class="lead text-center mt-0" style="color: black">Check out all my projects!</p>
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
    </body>
</html>


