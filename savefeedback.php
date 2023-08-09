
 <?php
 session_start();
    if(isset($_POST['button']))
    {
      $name=($_POST['name']);
      //$UID=$_SESSION["userid"];
      $email=$_POST['email'];
      $feedback=$_POST['message'];
      include 'config.php';

        $sql1="INSERT INTO feedback(UID,name,email,comment) VALUES({$_SESSION['userid']}, '$name','$email','$feedback')";
        $result1=mysqli_query($conn,$sql1);
        header("Location: http://localhost/Placement_Guidance_Website/Testimonial.php");

      mysqli_close($conn);
    }
  ?>
