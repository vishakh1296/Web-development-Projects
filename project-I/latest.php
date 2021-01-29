<?php
require_once("includes/header.php");
require_once("includes/classes/LatestProvider.php");

$latestProvider = new LatestProvider($con);
$videos = $latestProvider->getVideos();

$videoGrid = new VideoGrid($con);

?>

<div class="largeVideoGridContainer">
    <?php
    if(count((array) $videos)>0){
        echo $videoGrid->createLarge($videos, "Latest videos uploaded in the last week", false);

    }
    else{
        echo "No Latest Videos to Show";
    }

    ?>

</div>