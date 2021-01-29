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

$name = $email = $password = $pass = $confirm_password = $enct_cpass = $dob = $gender = $address = $contactno = '';

if(isset($_POST['register']))
{
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contactno = $_POST['mobileno'];
    $dob = $_POST['birthday'];
    $confirm_password = $_POST['confirm_password'];
    $password = md5($pass);
    $enct_cpass = md5($confirm_password);


    $emailquery = "SELECT * FROM  user_signup where email = '$email' ";
    $run_emailquery = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($run_emailquery);

    if($emailcount>0)
    {
        echo "email already exists";
    }
    else
    {
        if($password === $enct_cpass)
        {
            $query = "INSERT INTO user_signup (name, email, password , dateofbirth , address , contactnumber) values ('$name', '$email','$password','$dob','$address','$contactno')";
            $result = mysqli_query($con,$query);
            if($result)
                {  
                    
                    echo "<script> alert('Yay!,You are registered! Just Signin to get started');</script>";
                    //header("Location: index.php");
                 
                 
                    echo "<script>setTimeout(\"location.href = 'index.php';\",900);</script>";

                 
                }

             else{
                 echo "Error: Something went wrong";
                 }
        }
        else
        {
            echo "<script> alert('Password are not matching!'); </script>";
        }
    } 
}
?>




