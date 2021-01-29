<?php
require_once("includes/header.php");
require_once("includes/classes/Account.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/SettingsFormProvider.php");



$formProvider = new SettingsFormProvider();
?>

<div class="settingsContainer column">
    <div class="formSection">
       <center> Update Information</center>
        <?php
        echo $formProvider->createUserDetailsForm();
        ?>
</div>
</div>