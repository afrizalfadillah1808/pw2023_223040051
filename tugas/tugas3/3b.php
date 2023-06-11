<?php 

function urutanAngka($angka) {

    $nilaiAwal = 1;
    
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $nilaiAwal . " ";
            $nilaiAwal++;
        }
        echo "<br>";
    }
}

urutanAngka(5)

?>