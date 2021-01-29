<?php
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


$email = $password = $pass = '';

$email = $_POST['email'];
$pass = $_POST['password'];
$password = md5($pass);

$sql = "SELECT * FROM user_signup WHERE email='$email' AND password='$password'";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row["ID"];
        $email = $row["Email"];
        session_start();
        $_SESSION['userid'] = $id;
        $_SESSION['email']= $email;

    }
    header("Location: home_page.php");
}
else
{
    echo "<script> alert('Invalid email or Password'); 
    window.location.href='index.php';
    </script>";
}


?>