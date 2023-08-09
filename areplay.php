<?php
if(isset($_POST['submit']))
{
  session_start();

    $message = $_POST['replay'];
    $id=$_POST['id'];

      include "config.php";

      $sql="INSERT into afeedback(UID,message)  VALUES('{$id}','{$message}')";
      $result=mysqli_query($conn,$sql) or die("Query Failed");
      header("Location: http://localhost/Placement_Guidance_Website/Testimonial.php");

}

 ?>
