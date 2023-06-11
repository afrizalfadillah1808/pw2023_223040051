<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
      header("Location: ../../admin-login.php");
      exit;
}

require('../../../assets/function/functions.php');

if (isset($_GET["id"])) {
    $id = htmlspecialchars($_GET["id"]);

    if (delete_siswa($id) > 0) {
        echo "
            <script>
                alert('Success to Delete');
                document.location.href = '../daftar-siswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Failed to Delete');
                document.location.href = '../daftar-siswa.php';
            </script>
        ";
    }
} else {
    echo "Data Invalid";
}



?>