<?php 
require_once('includes/header.php'); ?>


<div class="videoSection">
<br>
<br>
<center><h1><i>Welcome to your Dance Platform!</i></h1></center>

    <?php

    $videoGrid = new VideoGrid($con);
    echo $videoGrid->create(null,"Recommended Dance Videos", false);
    ?>

</div>

<?php require_once('includes/footer.php');
?>
                      
                  




