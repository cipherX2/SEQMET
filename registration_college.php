<?php
require "connections.php";

$name = $_POST['name'];
$university_name = $_POST['university_name'] ;
$email = $_POST['email'] ; 
$contact = $_POST['contact'] ;
$state = $_POST['state'];
$city = $_POST['city'];
$zip = $_POST['zip'];

$address = "$city,$state,$zip";
//echo $address;

$password = $_POST['password'];

if(isset($_POST['encrypt_switch']))
{
    $password= password_hash($_POST['password'], PASSWORD_BCRYPT); 
}




$command="INSERT INTO `college_list` ( `college_name`, `university`, `email`, `contact`, `address`, `password`) 
          VALUES ('$name', '$university_name', '$email', '$contact', '$address', '$password')";

$result= mysqli_query($bhomies,$command);
if($result)
echo 'yes';
else
echo 'no';
?>