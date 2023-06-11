<?php
require_once('../../assets/function.php');

global $cdb;
$json = array();
$show = mysqli_query($cdb, "SELECT * FROM jadwal");

while($row = mysqli_fetch_assoc($show)) {
    if($row['jenis'] == 'jadwal') {
        $json[] = array(
            'backgroundColor' => 'rgb(255, 0, 0)',
            'borderColor' => 'rgb(255, 0, 0)',
            'start' => $row['jam_masuk'],
            'end' => $row['jam_keluar']
        );
    } else {
        $json[] = array(
            'backgroundColor' => 'white'
        );
    }
}
echo json_encode($json);

?>