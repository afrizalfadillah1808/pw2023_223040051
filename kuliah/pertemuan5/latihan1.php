<?php
// array adalah variable yang bisa menampung banyak nilai

$hari = array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu','minggu');
$bulan = ['januari', 'februari', 'maret', 'april', 'mei','juni','juli','agustus','september','oktober','november','desember'];
$myArray = ['wew', '~w~', 12];
$binatang = ['kucing', 'kelinci', 'monyet', 'panda', 'koala', 'sapi'];


// print
var_dump($hari);
print_r($bulan);
var_dump($myArray);
echo "<hr>";

// manipulasi array
// menambah elemen di akhir array (array_push)

$bulan[] = 'april';
$bulan[] = 'mei';
print_r($bulan);

echo "<hr>";

array_push($bulan, 'juni');
print_r($bulan);

echo "<hr>";

// tambah elemen didepan/awal (array_unshift)

array_unshift($binatang, 'ular','inu', 'ayam', 'B2');
print_r($binatang);


echo "<hr>";
// menghapus elemen di akhir array (array_pop)

array_pop($bulan);
print_r($bulan);




?>