<?php

require_once('includes/header.php');
require_once('includes/classes/SearchResultProvider.php');


if(!isset($_GET["term"]) || $_GET["term"]==""){
    echo "You must enter search term";
    exit();
}

$term = $_GET["term"];

if(!isset($_GET["orderby"])|| $_GET["orderby"]=="views"){
    $orderBy = "views";

}
else{
    $orderBy = "uploadDate";
}

$searchResultProvider = new SearchResultProvider($con);
$videos = $searchResultProvider->getVideos($term, $orderBy);

$videoGrid = new VideoGrid($con);

// require_once('includes/footer.php');


?>

<div class="largeVideoGridContainer"><br>
    <?php
    if(sizeof($videos)>0){
            echo $videoGrid->createLarge($videos, sizeof($videos). " videos found", true);
    }
    else{
        echo "No results found";
    }
    ?>

</div>