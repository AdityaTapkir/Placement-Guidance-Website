<?php
   include "config.php";
  session_start();
  if(!isset($_SESSION["username"])){
            header("Location: http://localhost/Placement_Guidance_Website/index.php");
  }
 ?>
