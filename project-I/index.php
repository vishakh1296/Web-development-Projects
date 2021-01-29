<?php
/*
-----------Database Configuration-----------------------------------------------
user "root" password " "
*/

$dbServername = "localhost";
$dbUser = "root";
$dbPassword ="";
$dbName = "project-1";
// To check whether connection was success or not
$con = mysqli_connect($dbServername, $dbUser, $dbPassword, $dbName);
if(mysqli_connect_errno())
{
    echo "Failed to Connect!";
    exit();
}



?>




<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="icons/logo.JPG">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome to Dance-Elite</title>
</head>
<body style="height: auto">
  <!---------------------------------Nav-Bar ------------------------->  
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F7F2E8; opacity:0.8;">
    
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <img src="logo.jpg" alt="Dance-Elite Logo" width="130" height="130">
  &nbsp
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <div class="title" style="margin-left: 650px; color: black;">
<center><i>WELCOME TO DANCE-ELITE</i><center>
</div>
    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul> -->
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<br><br>
<!------------------------------------------**---------------------------------->



<!-- <div class="title">
<center><i>WELCOME TO DANCE-ELITE</i><center>
</div> -->
<br>
<!------------------------------------------Login/Signup Form--------------------->
<!-------------------------------------------Sign-In---------------->

<div class="cont" style="left: 25%">
  <form action="login.php" method="post" >
    <div class="form sign-in">
        <h2> Sign In </h2>
        <br>
        <label>
            <span>Email Address</span>
            <input type="email" name="email" required>
        </label>
        <label>
            <span>Password</span>
            <input type="password" name="password" required>
        </label>   
        <button class="submit" type="submit">Sign In</button> 
        <p class="forgot-pass">Forgot Password ?</p>
        <br>

        <center><div class="social-media">
        
            <a href="https://www.facebook.com" class="fa fa-facebook">&nbsp Sign in with Facebook</a><br>
            <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="fa fa-google">&nbsp Sign in with Google</a>
            
        </div></center>
    </div>
  </form>
  
  <!-----------------------------------**------------------------------->
  <!-----------------------------------Sign Up-------------------------->
    <div class="sub-cont">
        <div class="img">
            <div class="img-text m-up">
            <h2>New Here?</h2>
            <p>Sign Up! & Join Our Dance Family</p>
            </div>
        
            <div class="img-text m-in">
            <h2>Are you part of Dance-Elite Family?</h2>
            <p>If you already have an account, just Sign In.</p>
            </div>
            <div class="img-btn">
                <span class="m-up">Sign Up<span>
                <span class="m-in">Sign In<span>
            </div>
        </div>


    
   <!----------------------------------signup.php------------->   
 <form method="post" action="signup.php">
        <div class="form sign-up">
            <h2>Sign Up</h2>
            <hr>
             <label>
                <span>Name</span>
                <input type="text" name="username" required>
            </label>
            <label>
                <span>Email</span>
                <input type="email" name="email" required>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" required>
            </label>
            <label>
                <span>Confirm Password</span>
                <input type="password" name="confirm_password" required>
            </label>
            <label>
                <span>Address</span>
                <input type="textarea" name="address" required>
            </label>
            <label style="display:flex;"> 
                 <span> Gender </span>
                 <input type="radio" name="male" value="male">
                 <span> Male </span>
                 <input type="radio" name="female" value="female">
                 <span> FeMale </span>
            </label> 
            <label>
              <span>Date of Birth</span>
                <input type="date" id="birthday" name="birthday" required>
                </label>
            <label>
                <span>Mobile Number</span>
                <input type="textarea" name="mobileno" required>
            </label>
            <button type="submit" class="submit" name="register">Sign Up Now </button>
            <br><br>
        </div>
        <br>
      </form>   
     </div>
</div>


<!---------------------script file--------------------------------->

<script type="text/javascript" src="script.js"></script> 
 <br><br><br> 
</body>















  <!-- -----------------------------Footer ----------------------------------->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Dance-Elite</h5>
        <p>The freedom of movement. The passion for dance..</p>
        <p>Dance-Elite philosophy is that every dancer should lead a balanced life.  Dance is only a portion of their needs and wants and should leave room for other hobbies and school. </p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">BLOG</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">AWARDS</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>

        
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#"> Dance-Elite</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- ------------------------------------Footer End------------------------ -->
</html>
