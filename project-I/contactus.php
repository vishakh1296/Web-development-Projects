<?php
require_once('includes/header.php');


?>


<div class="contact_contain" style="padding-left: 35%">
<div class="row">
<div class="col-lg-12 m-auto">
<div class="card">
<div class="card-title">
<h2 class="text-center py-2">Contact us</h2>
<hr>

</div>
<div class="card-body">
<form action="includes/classes/contactus_process.php" method="post">

  <div class="row">
    <div class="col-lg-3">Name: </div>
    <div class="col-lg-9">
      <input class="inputField" type="text" name="name" value="" required="true">
    </div>
    <span class="errorMessage"></span>
  </div>
  
  <br>

  <div class="row">
    <div class="col-lg-3">Email: </div>
    <div class="col-lg-9">
      <input class="inputField" type="email" name="email" value="" required="true">
    </div>
    <span class="errorMessage"></span>
  </div>

  <br>

  <div class="row">
    <div class="col-lg-3">Subject: </div>
    <div class="col-lg-9">
      <input class="inputField" type="text" name="subject" value="" required="true">
    </div>
    <span class="errorMessage"></span>
  </div>

    <br>

  <div class="row">
    <div class="col-lg-3">Message: </div>
    <div class="col-lg-9">
      <textarea name="message" rows="5" cols="40" required="true"></textarea>
    </div>
    <span class="errorMessage"></span>
  </div>

  <br>
  <div style="display: grid">
    <input class="btn btn-dark" type="submit" name="contactus_submit" value="Submit">
  </div>
   


    <!-- <input type="text" name="Uname" placeholder="User Name" class="form-contrl mb-2" required>
    <input type="email" name="email" placeholder="Email" class="form-contrl mb-2" required>
    <input type="text" name="subject" placeholder="Subject" class="form-contrl mb-2" required>
    <textarea name="msg" class="form-contrl mb-2" placeholder="Write Message" required></textarea>
    <button class="btn btn-success" name="btn-send">Send</button> -->
</form>
</div>
</div>

</div>
</div>

</div>
