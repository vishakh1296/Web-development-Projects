<?php
require_once("includes/header.php");
require_once("includes/classes/ProfileGenerator.php");



$profileGenerator = new ProfileGenerator($con);
echo $profileGenerator->create();
?>