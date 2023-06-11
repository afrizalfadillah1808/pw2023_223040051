<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
      header("Location: ../../admin-login.php");
      exit;
}

require('../../../assets/function/functions.php');

$id = htmlspecialchars($_GET["id"]);

if (delete_fk($id) > 0) {
    
    if( delete_pengajar($id) > 0) {
        echo "
        <script>
            alert('Succes to Delete');
            document.location.href = '../daftar-pengajar.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Failed to Delete');
            document.location.href = '../daftar-pengajar.php';
        </script>
    ";
    }
}

?>