<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
      header("Location: ../jadwal.php");
      exit;
}

require('../../../assets/function/functions.php');

$id = htmlspecialchars($_GET["id"]);

if( delete_jadwal($id) > 0) {
    echo "
    <script>
        alert('Succes to Delete');
        document.location.href = '../tambah-jadwal.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Failed to Delete');
        document.location.href = '../tambah-jadwal.php';
    </script>
";
}


?>