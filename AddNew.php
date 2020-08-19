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

$('.selectpicker').selectpicker('val', 'Mustard');

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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
            <p class="col-sm-10 font-weight-bold text-center align-middle">Add New Project</p>
            <p class="col"></p> 
            <input type="submit" name="submit" value='Create Project' placeholder="Create Project" form="my-form" href="#" class="btn btn-primary btn-sm custombtn my-1 mr-3"></input>
          </div>

          <form action="insert.php" enctype='multipart/form-data' method="POST" id="my-form">
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <img src="Wallpaper/bg.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Project Name</label>
                    <input class="form-control" name="ProjectName" placeholder="Enter Project Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Project Description</label>
                    <textarea class="form-control" name="ProjectDesc" rows="2" placeholder="Add Project Description"></textarea>
                  </div>
                  <div class="form-group">
                        <label for="exampleFormControlTextarea1">Select Theme</label>
                        <select class="selectpicker w-80" name="ProjectThemes[]" data-style="bg-white rounded-pill py-3 shadow-sm " title="Web Dev" multiple data-live-search="true" multiple>
                          <option selected>Web Dev</option>
                          <option>Soft Dev</option>
                          <option>Data Science</option>
                          <option>Game Dev</option>
                          <option>Design</option>
                        </select>
                        <label for="exampleFormControlTextarea1">Select language</label>
                        <select class="selectpicker w-30"  data-style="bg-white rounded-pill py-3 shadow-sm " multiple data-live-search="true">
                          <option>HTML</option>
                          <option>CSS</option>
                          <option>JS</option>
                          <option>Bootstrap</option>
                          <option>Python</option>
                          <option>C#</option>
                          <option>C++</option>
                          <option>C</option>
                          <option>SQL</option>
                          <option>WPF</option>

                        </select>
                  </div>
                </div>
              </div>
            </div>

             <input type='hidden' value='<?= $proname ?>' name='proname' >

            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Project Description</label>
                    <textarea class="form-control" name="ProjectDesc2" rows="5" placeholder="Add Project Description"></textarea>
                    <input type="file" accept="image/*" form="my-form" name="file" >
            </div>


            

            <!--<div class="form-group">
                  <label for="exampleFormControlTextarea1">Upload Image</label>
                  <input type='file' id="imgInp" />
            </div>-->

            <div class="form-group">
                    <label for="exampleFormControlTextarea3">Project Description</label>
                    <textarea class="form-control" name="pd3" rows="6" placeholder="Add Project Description"></textarea>
            </div>

            <!-- <div class="form-group">
              <label for="exampleFormControlTextarea1">Upload Images</label>
              <div class="input-group pb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" multiple class="custom-file-input" id="imgInp"
                    aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div> -->



              <div class="form-group">
                <form id="form1" runat="server">
                  <label for="exampleFormControlTextarea1">Upload Images</label>
                  <input type='file' multiple id="imgInp" />
                  <!--<img id="blah" src="#" alt="your image" />-->
                </form>
              </div>

              

            </div>
            
        
          </form>
        
        </div>


    </body>
</html>

