<?php
 session_start();
 if(isset($_SESSION['username'])) {
?>

<button class="btn" id="right-btn" onclick="window.location.href = './logout.php';"><?php echo $_SESSION['username'] ?></button>
<?php
}else {
?>
<button class="btn" id="right-btn" onclick="window.location.href = './logout.php';"> Logout</button>

<?php
  }
?>
