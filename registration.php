<?php
session_start();
require ("connections.php");



$_SESSION['name']        = $name        = $_POST['name'];
$_SESSION['sic']         = $sic         = $_POST['sic'];
$_SESSION['father_name'] = $father_name = $_POST['father_name'];
$_SESSION['dob']         = $dob         = $_POST['dob'];
$_SESSION['class']       = $class       = $_POST['class'];
$_SESSION['gender']      = $gender      = $_POST['gender'];
$_SESSION['email']       = $email       = $_POST['email'];
$_SESSION['contact']     = $contact     = $_POST['contact'];
$_SESSION['address']     = $address     = $_POST['address'];
$_SESSION['password']    = $password    = $_POST['password'];


// $_SESSION['image']       = $filename    = $_FILES['image']['name'];
// $_SESSION["folder"]      = $folder      = "images/".$filename;
// $temp_name               = $_FILES['image']['tmp_name'];
//echo $temp_name;
//echo '<br>';
//echo $folder;
//move_uploaded_file($temp_name,$folder);
//echo "<img src='$folder ' height='100' width='100'/>";

 if(isset($_POST['encrypt_switch']))
 {
     $password= password_hash($_POST['password'], PASSWORD_BCRYPT); 
 }

$insert_query = "INSERT INTO student_table  
                    (`name`,sic,father_name,dob,class,gender,email,contact,`address`,`password`)
                 VALUES ('$name','$sic','$father_name','$dob','$class','$gender','$email','$contact','$address','$password')";


$result=mysqli_query($bhomies,$insert_query);
if($result)
    echo "Registration Successful";
    else
    echo 'BHOMS';
        
      //  header("Location:http://localhost/PhpInternship/php/student_interface.php");  
 

?>