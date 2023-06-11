<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('bread', '', time() - 3600);
setcookie('cips', '', time() - 3600);

header("Location: ../../login.php");
exit;

?>