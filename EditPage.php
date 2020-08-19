<!--Here we take information (proname) from MyProjectsPersonal and bring it here with POST
function, and even in this page, we send edited info (proname, desc, desc2...) to edit.php -->

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="AddNew.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <script src="AddNew.js"></script>
        <script>
function myFunction() {
    document.getElementById("demo").style.color = "red";
}

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>
        
        
    </head>

    <body>
      <! –– Navigation bar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
          <a class="navbar-brand" href="#">My Page</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="MainPage.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact me</a>
              </li>
              <li class="nav-item pull-right">
                <a class="nav-link" href="#">Login</a>
              </li>
            </ul>
          </div>
        </nav>
        <! –– Navigation bar End -->
        
        <div class="container projectbg">
          <div class="row mt-2 py-2">
            <p class="col-sm-6 font-weight-bold text-right align-middle">Edit Project</p>
            <p class="col"></p> 
            <input type="submit" name="delete" value='Delete' form="my-form" href="#" class="btn btn-danger btn-sm custombtn my-1 mr-3"></input>
            <input type="submit" name="submit" value='Make Changes' form="my-form" href="#" class="btn btn-primary btn-sm custombtn my-1 mr-3"></input>
          </div>

          <?php
          if ( isset( $_POST['submit'] )){
                $proname = $_POST['ProjectName'];
          }
                include_once("db_connect.php");
                $sql = "SELECT PName, PDesc, PDesc2, PDesc3, MainImage, Theme, Language, Type FROM projectdata WHERE PName='$proname' ";

                


                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                while( $record = mysqli_fetch_assoc($resultset) ) {
                ?>


          <form action="edit.php" enctype='multipart/form-data' method="POST" id="my-form">
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <img src="<?php echo $record['MainImage']; ?>" style="transform: 1.2;" class="img-fluid" alt="Responsive image">
                </div>


                <div class="col">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Project Name</label>
                    <input class="form-control" value="<?=$_POST['ProjectName']?>" name="ProjectName" placeholder="Enter Project Name">
                    <input readonly class="form-control" value="<?php echo $record['PName'];?>" name="oldproname" >
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Project Description</label>
                    <textarea class="form-control"  name="ProjectDesc" rows="2" placeholder="Add Project Description"><?php echo $record['PDesc']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label for="exampleFormControlTextarea1">Select Theme</label>
                        <select class="selectpicker w-80" name="ProjectThemes[]"  data-style="bg-white rounded-pill py-3 shadow-sm " multiple data-live-search="true" multiple>

                          <?php 
                            $theme = $record['Theme']; #all themes given in a project
                            $themefound = false;  #check if currenttheme is in themes
                            $allthemes = [        #array for themes
                              "Web Dev",
                              "Soft Dev",
                              "Data Science",
                              "Game Dev",
                              "Design",
                            ];

                            foreach($allthemes as $currenttheme){
                                if(strpos($theme, $currenttheme)  !== false){  #search term 
                                  $themefound = true;
                                } 

                                else{ 
                                  $themefound = false;
                                }

                                if($themefound == true){
                                   echo "<option selected><p>{$currenttheme}</p></option>";
                                }
                                else{
                                    echo "<option><p>{$currenttheme}</p></option>";
                                }
                            }
                         ?>
                         
                        </select>
                      </div>
                      <div class="col">
                        <label for="exampleFormControlTextarea1">Select language</label>
                        <select class="selectpicker w-80" name="ProjectLangs[]" data-style="bg-white rounded-pill py-3 shadow-sm " multiple data-live-search="true">
                          <?php 
                            $lang = $record['Language']; #all languages given in a project
                            $langfound = false;  #check if currentlanguage is in languages
                            $alllangs = [        #array for languages
                              "HTML",
                              "CSS",
                              "JS",
                              "Bootstrap",
                              "Python",
                              "C",
                              "C++",
                              "C#",
                              "SQL",
                              "WPF",
                            ];

                            foreach($alllangs as $currentlang){
                                if(strpos($lang, $currentlang)  !== false){  #search term 
                                  $langfound = true;
                                } 

                                else{ 
                                  $langfound = false;
                                }

                                if($langfound == true){
                                   echo "<option selected><p>{$currentlang}</p></option>";
                                }
                                else{
                                    echo "<option><p>{$currentlang}</p></option>";
                                }
                            }
                         ?>
                        </select>
                      </div>
                      <div class="col">
                        <label for="exampleFormControlTextarea1">Select type</label>
                        <select class="selectpicker w-80" name="ProjectTypes[]" data-style="bg-white rounded-pill py-3 shadow-sm " multiple data-live-search="true">
                          <?php 
                            $type = $record['Type']; #all languages given in a project
                            $typefound = false;  #check if currentlanguage is in languages
                            $alltypes = [        #array for languages
                              "Personal",
                              "Team",
                            ];

                            foreach($alltypes as $currenttype){
                                if(strpos($type, $currenttype)  !== false){  #search term 
                                  $typefound = true;
                                } 

                                else{ 
                                  $typefound = false;
                                }

                                if($typefound == true){
                                   echo "<option selected><p>{$currenttype}</p></option>";
                                }
                                else{
                                    echo "<option><p>{$currenttype}</p></option>";
                                }
                            }
                         ?>

                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <input type='hidden' value='' name='proname' >

            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Project Description</label>
                    <textarea class="form-control" name="ProjectDesc2" rows="5"><?php echo $record['PDesc2']; ?></textarea>
                    <input type="file" accept="image/*" value="<?php echo $record['MainImage']; ?>" form="my-form" name="file" >
            </div>

            <div class="form-group">
                    <label for="exampleFormControlTextarea3">Project Description</label>
                    <textarea class="form-control" name="pd3" rows="6" placeholder="Add Project Description"><?php echo $record['PDesc3']; ?></textarea>
            </div>

              <div class="form-group">
                <form id="form1" runat="server">
                  <label for="exampleFormControlTextarea1">Upload Images</label>
                  <input type='file' multiple id="imgInp" />
                  <!--<img id="blah" src="#" alt="your image" />-->
                </form>
              </div>

            </div>
            
          </form>
        <?php } ?> 
      </div>


    </body>
</html>


