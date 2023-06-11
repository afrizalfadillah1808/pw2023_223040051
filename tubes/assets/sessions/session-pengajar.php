<?php
session_start();

if ( !isset($_SESSION["pengajar"]) ) {
      header("Location: ../login-pengajar.php");
      exit;
}


?>