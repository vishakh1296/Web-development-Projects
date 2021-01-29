<?php 
require_once('includes/header.php'); 
require_once('includes/classes/VideoPlayer.php'); 
require_once('includes/classes/VideoInfoSection.php'); 
require_once('includes/classes/CommentSection.php'); 




if(!isset($_GET["id"])){
        echo "No url found";
        exit();
}

$video = new Video($con, $_GET["id"]);
$video->incrementViews();

?>

<div class="watchLeftColumn">

<?php

$videoPlayer = new VideoPlayer($video);
echo $videoPlayer->create(true);

$videoPlayer = new VideoInfoSection($con,$video);
echo $videoPlayer->create();

$commentSection = new CommentSection($con,$video);
echo $commentSection->create();

?>


</div>
<div class="suggestions">
<?php

$videoGrid = new VideoGrid($con);
echo $videoGrid->create(null,null,false);
?>
</div>


<?php require_once('includes/footer.php');
?>