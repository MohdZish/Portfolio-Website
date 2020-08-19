<?php
//error_reporting(E_ALL ^ E_NOTICE);
if ( isset( $_POST['submit'] )){
	$proname = $_POST['ProjectName'];
	$prodesc = $_POST['ProjectDesc'];
	$prodesc2 = $_POST['ProjectDesc2'];
	$prodesc3 = $_POST['pd3'];
	$prothemes = $_POST['ProjectThemes']; #ProjectThemes is array which we store in prothemes
	$themes = implode(",",$prothemes); #implode sperates array into string with ,

	$prolangs = $_POST['ProjectLangs']; #ProjectThemes is array which we store in prothemes
	$langs = implode(",",$prolangs);

	$protype = $_POST['ProjectType']; #ProjectThemes is array which we store in prothemes
	$type = implode(",",$protype);

	$location = "Images/".$proname;
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);  #To get the extension of the file (jpeg, png, gif...)

	# create directory if not exists in upload/ directory
	if(!is_dir($location)){
    mkdir($location, 0755);
  	}

  	$location .= "/mainimage.".$extension ;  #Here we add in the extension (jpeg, png, gif...) to file

  	# Upload file
  	move_uploaded_file($_FILES['file']['tmp_name'],$location); #Main moving process

  	#IMAGE 1
  	$location1 = "Images/".$proname;
	$temp1 = explode(".", $_FILES["file1"]["name"]);
	$extension1 = end($temp1);
	if(!is_dir($location1)){
    mkdir($location1, 0755);
  	}
  	$location1 .= "/image1.".$extension1 ;  
  	move_uploaded_file($_FILES['file1']['tmp_name'],$location1); 

  	#IMAGE 2
  	$location2 = "Images/".$proname;
	$temp2 = explode(".", $_FILES["file2"]["name"]);
	$extension2 = end($temp2);
	if(!is_dir($location2)){
    mkdir($location2, 0755);
  	}
  	$location2 .= "/image2.".$extension2 ; 
  	move_uploaded_file($_FILES['file2']['tmp_name'],$location2); 

  	#IMAGE 3
  	$location3 = "Images/".$proname;
	$temp3 = explode(".", $_FILES["file3"]["name"]);
	$extension3 = end($temp3);
	if(!is_dir($location3)){
    mkdir($location3, 0755);
  	}
  	$location3 .= "/image3.".$extension3 ; 
  	move_uploaded_file($_FILES['file3']['tmp_name'],$location3); 

  	#IMAGE 4
  	$location4 = "Images/".$proname;
	$temp4 = explode(".", $_FILES["file4"]["name"]);
	$extension4 = end($temp4);
	if(!is_dir($location4)){
    mkdir($location4, 0755);
  	}
  	$location4 .= "/image4.".$extension4 ; 
  	move_uploaded_file($_FILES['file4']['tmp_name'],$location4); #Main moving process
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

	$sql = "INSERT INTO Projectdata(PName,PDesc,PDesc2,PDesc3,MainImage,Theme,Language,Type,Image1,Image2,Image3,Image4) VALUES('$proname','$prodesc','$prodesc2','$prodesc3', '$location', '$themes', '$langs', '$type','$location1','$location2','$location3','$location4')";

	if($conn->query($sql) === TRUE){
		echo "New Record created succesfully";
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