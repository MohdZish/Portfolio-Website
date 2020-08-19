<?php
//Here there are two main process: Edit and Delete
//For EDIT, we take proname.... from EditPage.php and send it here with POST
//FOr DELETE, we take proname.. from EditPage.php and sent it here with POST
$success1 = false;
$success2 = false;
if ( isset( $_POST['submit'] )){
	$proname = $_POST['ProjectName'];
	$prodesc = $_POST['ProjectDesc'];
	$prodesc2 = $_POST['ProjectDesc2'];
	$prodesc3 = $_POST['pd3'];
	$oldproname = $_POST['oldproname'];

	$prothemes = $_POST['ProjectThemes']; #ProjectThemes is array which we store in prothemes
	$themes = implode(",",$prothemes);

	$prolangs = $_POST['ProjectLangs']; #ProjectThemes is array which we store in prothemes
	$langs = implode(",",$prolangs);

	$protypes = $_POST['ProjectTypes']; #ProjectThemes is array which we store in prothemes
	$types = implode(",",$protypes);


	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);  #To get the extension of the file (jpeg, png, gif...)

	$oldlocation = "Images/".$oldproname; #for renaming old folder
	$location = "Images/".$proname; #the new folder location


	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);  #To get the extension of the file (jpeg, png, gif...)


	if(!is_dir($oldlocation)){  #Create directory if not
    mkdir($oldlocation, 0755);
  	}
  #Rename directory
  	else{
  		rename($oldlocation, $location);
  	}
  	

  	$location .= "/mainimage.".$extension ;  #Here we add in the extension (jpeg, png, gif...) to file
  	echo $location;

  	move_uploaded_file($_FILES['file']['tmp_name'],$location);
}


if ( isset( $_POST['delete'] )){
	$proname = $_POST['ProjectName'];
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "new";
	$location = "Images/".$proname;

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

		$sql = "DELETE FROM projectdata WHERE PName='$proname'";


	if($conn->query($sql) === TRUE){
		
	}
	else{
		echo "Error: " .$sql . "<br>" . $conn->error;
	}

	$conn->close();

	array_map('unlink', glob("$proname/*.*"));

	rmdir($location);

	exit("Project successfully deleted");
}

function delete_files($target) {
    if(is_dir($target)){
        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned

        foreach( $files as $file ){
            delete_files( $file );      
        }

        rmdir( $target );
    } elseif(is_file($target)) {
        unlink( $target );  
    }
}

if(!empty($proname) || !empty($prodesc)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "new";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

		$sql = "UPDATE Projectdata SET PName='$proname', PDesc='$prodesc', PDesc2='$prodesc2', PDesc3='$prodesc3', MainImage='$location', Theme='$themes', Language='$langs', Type='$types' WHERE PName='$oldproname'";


	

	if($conn->query($sql) === TRUE){
		echo "New Record created succesfully";
		/*header("Location: http://localhost/MainPage.php");
		alert("Hi");*/
	}
	else{
		echo "Error: " .$sql . "<br>" . $conn->error;
	}

	$conn->close();
}
else{
	echo "All fields are required";
	die();
}



?>