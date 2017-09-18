<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"registration_Form");
if(isset($_REQUEST['submit']))
{
$errorMessage = "error";
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$stdNo=$_POST['stdno'];
$rollNo=$_POST['rollno'];
$hosteller=$_POST['hosteller'];

echo "kaam nhi kr rha hai php";

 
// Validation will be added here
 
//if ($errorMessage != "" ) {
//echo "<p class='message'>" .$errorMessage. "</p>" ;
//}
//else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `registration_Form`.`members`
(`firstname`, `lastname`, `email`, `phone`, `gender`,
`branch`, `year`, `stdno`, `rollno`, `hosteller`) VALUES ('$firstname', '$lastname', 
'$email', '$phone', '$gender', '$branch', '$year', '$stdno', '$rollno', '$hosteller')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
?>