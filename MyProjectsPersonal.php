<!-- This page has all projects with EDIT buttons. The edit button is a SUBMIT button with POST which sends to EditPage.php according to the button clicked. -->

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="MainPage.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
         <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
                <a class="nav-link mpbutton" href="MainPage.php">Home</a>
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
          <!--<div class="projectbgback"></div>-->
          <div class="container-fluid shadow-lg projectbg rounded" style="-webkit-clip-path: polygon(0 0%, 100% 0, 100% 100%, 0% 100%);">
            <div class="row align-items-center row justify-content-center">
              <p class="sectionheading text-center align-items-center">   My Projects  </p>
              <img class="imgheader" src="/Wallpaper/sb.gif" style="width: 25px; height: 25px; padding-top: 0px;">
            </div>
            <p class="lead text-center mt-0" style="color: black">Check out all my projects!</p>
            <div class="row justify-content-center">
              <a class="btn btn-primary" href="AddNew.html">Create New Project</a>
            </div>
            <div class="row cardrow">
              <?php
                include_once("db_connect.php"); 
                $sql = "SELECT PName, PDesc, MainImage FROM projectdata";
                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                while( $record = mysqli_fetch_assoc($resultset) ) {
                ?>
                
                  <div class="col-lg-4 col-md-5 col-12">
                    <div class="card cardt mt-4">
                      <img class="card-img-top " src="<?php echo $record['MainImage']; ?>">
                      <div class="card-body">
                        <h4 class="card-title">
                          <?php echo $record['PName']; ?>                        
                        </h4>
                        <p class="card-text">
                          <?php echo $record['PDesc']; ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-primary" style="height: 38px; margin-bottom: 0px;">View</button>

                            <form action="EditPage.php" enctype='multipart/form-data' method="POST" id="my-form" style="margin-bottom: 0px!important;">
                              <input type="submit" name="submit" value="Edit" class="btn btn-success"></input>
                              <input class="hidden" name="ProjectName" value="<?php echo $record['PName']; ?>" style="visibility: hidden;">
                            </form>

                          </div>
                          <div class="chip deep-purple white-text mr-0">7:30PM</div>
                        </div>

                      </div>
                    </div>
                  </div>
 
                  
                <?php } ?> 
          </div>

          </div>
    </body>
</html>


