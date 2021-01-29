<?php
// require_once("includes/config.php");
require_once('includes/header.php');
require_once('includes/classes/VideoUploadData.php');
require_once('includes/classes/VideoProcessor.php');


// if(!isset($POST["uploadButton"])){
   
// }


//file upload
$videoUploadData = new VideoUploadData(
$_FILES["fileInput"],
$_POST["titleInput"],
$_POST["descriptionInput"],
$_POST["privacyInput"],
$_POST["categoryInput"],
"USER");

//video processing

$videoProcessor = new VideoProcessor($con);
$wasSuccessful = $videoProcessor->upload($videoUploadData);


if($wasSuccessful)
{
    echo "<script>alert('upload Successful!');
    
    window.location.href='profile.php';
    </script>";
   
}



?>