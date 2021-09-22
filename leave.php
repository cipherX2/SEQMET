<?php
require "connections.php";

$student_id = $_REQUEST['id'];
$leave = $_POST['leave'];

$sql= "INSERT INTO `leave_applications` (`student_id`, `leave_message`) VALUES ('$student_id', '$leave')";

$result = mysqli_query($bhomies,$sql);

if($result)
echo 'LEAVE APPLIED';
else
echo 'FAILED,  TRY AGAIN';



?>