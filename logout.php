<!-- <?php include "session.php"; ?> -->
<?php
include "config.php";
session_start();
session_unset();
session_destroy();
header("Location: {$hostname}/loginRegistration.php");
 ?>
