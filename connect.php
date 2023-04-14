<?php

$con = mysqli_connect('localhost','root');

if ($con) {

    echo "Connected Sucessfully";
}
else {
    echo "Connection Failed";
}
mysqli_select_db($con, 'thesis');

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$password = $_POST['pass'];


$query = "INSERT INTO `login` (`firstname`, `lastname`, `password`) VALUES ('$firstname', '$lastname', '$password')";

mysqli_query($con, $query);

?>