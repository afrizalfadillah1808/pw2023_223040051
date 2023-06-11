<?php
require('../../assets/sessions/session-user.php');

require('../../assets/function/functions.php');
require('../../assets/parts/user-part/header-user.php');
require('../../assets/parts/user-part/nav-user.php');

$jadwal = query_siswa("SELECT * FROM jadwal");
?>
<h3 style="text-align: center; margin: 2rem 0 4rem 0 ;">Jadwal</h3>
<div class="container mt-3">
    <table id="daftar-pengajar" class="table table-sm" style="text-align: center;">
        <thead>
            <tr>
                <th class="col" scope="col">NO</th>
                <th class="col" scope="col">Tanggal</th>
                <th class="col" scope="col">Jam Msuk</th>
                <th class="col" scope="col">Jam selesai</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $i = 1; foreach($jadwal as $jdw) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $jdw["tanggal_masuk"]; ?></td>
                <td><?= $jdw["jam_masuk"]; ?></td>
                <td><?= $jdw["jam_keluar"]; ?></td>
            </tr>
            <?php endforeach ; ?>
            </tbody>
</table>

<?php require('../../assets/parts/user-part/footer-user.php'); ?>