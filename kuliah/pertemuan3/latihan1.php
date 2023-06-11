<?php 

// loop
// 1. inisialisasi / nilai awal
// 2. kondisi terminasi / kapan pengulangan nya berhenti
// 3. increment / decrement

$loop = 1;

 echo "Mulai. <br>";
 while ($loop <= 5) {
    echo "Hello world <br>"; 
    $loop = $loop + 1;
    
 }
 echo "selesai. <br>";

 echo "<hr>";

 echo "Mulai. <br>";
 for ($loop = 1; $loop <= 5; $loop++) {
    echo "Hello world <br>"; 

 }
 echo "selesai. <br>";



?>

