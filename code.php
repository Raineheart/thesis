<?php 
session_start();
 $connection = mysqli_connect("localhost", "root", "","thesis");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass1'];


if($password === $cpassword)
{
    $query = "INSERT INTO `adminreg` (`username`, `password`) VALUES ('$username', '$password')";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        //echo "Saved";
        $_SESSION['success'] = "Admin Profile Added";
        header("Location: register.php");
    }
    else
    {
        $_SESSION['status'] = "Admin Profile Not Added";
        header("Location: register.php");
    }
}
else    
{
    $_SESSION['status'] = "Password and Confirm Password Does not Match";
        header("Location: register.php");
}


}

?>