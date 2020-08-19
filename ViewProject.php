<!-- This page has all projects with EDIT buttons. The edit button is a SUBMIT button with POST which sends to EditPage.php according to the button clicked. -->

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="ViewProject.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
         <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
      <script>
        function myFunction(imgs) {
          // Get the expanded image
          var expandImg = document.getElementById("expandedImg");
          // Get the image text
          var imgText = document.getElementById("imgtext");
          // Use the same src in the expanded image as the image being clicked on from the grid
          expandImg.src = imgs.src;
          // Use the value of the alt attribute of the clickable image as text inside the expanded image
          imgText.innerHTML = imgs.alt;
          // Show the container element (hidden with CSS)
          expandImg.parentElement.style.display = "block";
        }
        </script>
      

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
          <div class="container-fluid shadow-lg projectbg rounded" style="-webkit-clip-path: polygon(0 0%, 100% 0, 100% 100%, 0% 100%);  ">
            <div>
              <?php
              if ( isset( $_POST['submit'] )){
                $proname = $_POST['ProjectName'];
              }
                include_once("db_connect.php");
                $sql = "SELECT PName, PDesc, PDesc2, PDesc3, MainImage, Theme, Language, Type, Image1, Image2, Image3, Image4 FROM projectdata WHERE PName='$proname'";
                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                while( $record = mysqli_fetch_assoc($resultset) ) {
                ?>

                    <div class="row" style="padding-bottom: 10px;">
                      <div class="col-sm-6">
                        <img class="img-fluid projectimage rounded" id="expandedImg" src="<?php echo $record['MainImage'];?>" style=" margin-left: 20px; border-radius: 7px!important;"  alt="Responsive image">

                        <div class="row projectimage2" style="margin-left: 20px; margin-top: 5px;">
                          <?php
                              $imgornot = false;   #check if there are images or note
                              for($i = 1; $i <= 3; $i++){
                                if($record['Image'.$i] !== "" and $record['Image'.$i] !== null){
                                  $imgornot = true;
                                }
                              }
                              if($imgornot == true){
                                echo "<img class='img-fluid' src='".$record['MainImage']."' style='max-width: 110px; margin-right: 5px;border-radius: 5px!important;''  onclick='myFunction(this);' alt='Responsive image'>";
                              } 

                              for ($i = 1; $i <= 3; $i++) {
                                  if($record['Image'.$i] !== "" and $record['Image'.$i] !== null){
                                    echo "<img class='img-fluid' src='".$record['Image'.$i]."' style='max-width: 110px; margin-right: 5px;border-radius: 5px!important;''  onclick='myFunction(this);' alt='Responsive image'>";
                                  }
                              }
                          
                          ?>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <p type="text" class="sectionheading text-center align-items-center" name="ProjectName" style="margin-top: 0px!important;"><?=$_POST['ProjectName']?></p>
                        <p type="text" class=" lead text-center align-items-center" name="ProjectName"  style="padding-bottom: 10px;"><?php echo $record['PDesc']; ?></p>

                        <div class="container rounded projectdetails">

                            <p type="text" class="lead align-items-center" name="ProjectName" style="font-size: 18px; margin-bottom: 10px; padding-top: 5px;">Type : <?php echo $record['Type']; ?></p>
                            <p type="text" class="lead align-items-center" name="ProjectName" style="font-size: 18px; margin-left: 0px; margin-bottom: 10px;">Themes</p>
                            
                            <?php 
                            $theme = $record['Theme']; #all themes given in a project
                    
                            $allthemes = explode(",", $theme);

                            function colorgiver($name) {
                              $color = "white";
                              if(strpos($name, "Web Dev")!== false) $color="chartreuse";
                              if(strpos($name, "C")!== false) $color="rgb(255, 153, 241)";
                              if(strpos($name, "Soft Dev")!== false) $color="cyan";
                              if(strpos($name, "Data Science")!== false) $color="yellow";
                              if(strpos($name, "Game Dev")!== false) $color="lightblue";
                              if(strpos($name, "Design")!== false) $color="aquamarine";
                              if(strpos($name, "HTML")!== false) $color="rgb(226, 255, 38)";
                              if(strpos($name, "CSS")!== false) $color="rgb(224, 255, 247)";
                              if(strpos($name, "JS")!== false) $color="rgb(203, 255, 196)";
                              if(strpos($name, "Bootstrap")!== false) $color="rgb(255, 224, 153)";
                              if(strpos($name, "Python")!== false) $color="rgb(201, 153, 255)";
                              if(strpos($name, "C++")!== false) $color="rgb(191, 253, 255)";
                              if(strpos($name, "C#")!== false) $color="rgb(219, 255, 158)";
                              if(strpos($name, "SQL")!== false) $color="rgb(255, 208, 163)";
                              if(strpos($name, "WPF")!== false) $color="rgb(199, 206, 255)";
                              return $color;
                            }

                            foreach($allthemes as $currenttheme){
                              echo "<k class='themeelement' style='background-color: ".colorgiver($currenttheme)."'>{$currenttheme}</k>";
                            }
                            ?>

                            <p type="text" class=" lead align-items-center" name="ProjectName" style="font-size: 18px; margin-left: 0px; margin-top: 10px; margin-bottom: 10px;">Languages</p>

                          <?php 
                            $lang = $record['Language']; #all themes given in a project
                            
                            $alllangs = explode(",", $lang);


                            foreach($alllangs as $number => $currentlang){
                              echo "<k class='themeelement' style='background-color: ".colorgiver($currentlang)."'>{$currentlang}</k>";

                            }
                            ?>

                        </div>
                      </div>
                    </div>

                    <hr style="margin-top: 0px!important; border-top: 1px solid rgba(0, 0, 0, 0.5); width: 75%;"></hr>

                    <div class="container" style="margin: 10px;">
                      <div class="form-group">
                            <lead type="text" class="text-center align-items-center" name="ProjectName"><?php echo $record['PDesc2']; ?></lead>
                      </div>

                      <div class="form-group">
                            <lead type="text" class="text-center align-items-center"name="ProjectName"><?php echo $record['PDesc3']; ?></lead>
                      </div>
                    </div>
                    
                <?php } ?> 
            </div>
          </div>
    </body>
</html>


