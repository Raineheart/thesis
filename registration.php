<?php

$con = mysqli_connect('localhost','root');

if ($con) {

    echo "Connected Sucessfully";
}
else {
    echo "Connection Failed";
}
mysqli_select_db($con, 'thesis');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$stuID = $_POST['id'];
$gender = $_POST['gender'];
$dob = $_POST['birth'];
$myaddress = $_POST['address'];
$mycontact = $_POST['num'];
$myemail = $_POST['email'];
$mycourse = $_POST['course'];
$myyear = $_POST['year'];
$regDate = $_POST['dor'];


$query = "INSERT INTO `register` (`firstname`, `lastname`, `student_id`, `gender`, `date_of_birth`, `address`, `contact_num`, `email_ad`, `course`, `year_level`, `date_added`) VALUES ('$fname', '$lname', '$stuID', '$gender', '$dob', '$myaddress', '$mycontact', '$myemail', '$mycourse', '$myyear', '$regDate')";

mysqli_query($con, $query);
?>