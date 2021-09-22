<?php

require "connections.php";

$username = $_POST['username'];
$password = $_POST['password'];
$institute = $_POST['institute'];
$user= $_POST['user'];

if($user == 'parent')
{
    $command = "SELECT * FROM `parent_list` WHERE username='$username' && password= '$password'";
    $id      = "SELECT `student_id` FROM `parent_list` WHERE  username='$username' && password= '$password' ";
    $get_id= mysqli_query($bhomies,$id);
    
    $result = mysqli_query($bhomies,$command);

$count = mysqli_num_rows($result);

       if($count > 0)
     {
    //echo "Login Successfull";
    while($fetch_id=mysqli_fetch_array($get_id))
    {
        $student_id = $fetch_id['student_id'];
      //  echo $student_id;
    }
  header("Location:parentDashboard.php?id=$student_id");
   
    }

    else
   {
    echo 'Invalid Credentials';
   }

}

else if($user == 'institute')
{
    $command =  "SELECT * FROM `college_list` WHERE admin_username='$username' && admin_password= '$password'";

    $result = mysqli_query($bhomies,$command);

    $count = mysqli_num_rows($result);
    
           if($count > 0)
         {
        //echo "Login Successfull";
        while($fetch_id=mysqli_fetch_array($get_id))
        {
            $student_id = $fetch_id['student_id'];
          //  echo $student_id;
        }
      header("Location:Dashboard.php?id=$student_id");
       
        }
    
        else
       {
        echo 'Invalid Credentials';
       }
    

}

else
{
    echo "Ek third page";
   // header("Location: ");
}



?>