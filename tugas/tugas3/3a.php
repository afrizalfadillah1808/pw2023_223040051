<?php 
$r = 10;
$phi = 3.14;


echo "<b>Menghitung Luas Lingkaran</b><br><br>";

echo "Jari-jari = " . $r . "cm<br>";

function luaslingkaran($r, $phi)  {
    $luas = $phi * pow($r, 2);
    return $luas;
}

echo "Luas lingkaran = " . $luas = luaslingkaran($r, $phi) . "cm^2 <br> <hr>";

echo "<b>Menghitung Keliling Lingkaran</b><br><br>";

echo "Jari-jari = " . $r = $r * 2 . "cm<br>";

function kelilinglingkaran($phi, $r) {
    $keliling = $phi or $r or 2;
    return $keliling;
}

echo "Keliling Lingkaran = " . $keliling = kelilinglingkaran($phi, $r) . "cm^2 <br> <hr>";

?>