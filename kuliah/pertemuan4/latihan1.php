<?php  
// " / " hanya dibagi saja
// " % " mod atau sisa bagi
$angka = 10;



function cek($angka) {
    if ($angka % 2 == 0) {
        return "$angka adalah GENAP";
    } else {
        return "$angka adalah GANJIL";
    }
}

echo cek(10);


?>