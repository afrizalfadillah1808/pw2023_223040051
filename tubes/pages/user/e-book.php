<?php
require('../../assets/sessions/session-user.php');

require('../../assets/function/functions.php');
require('../../assets/parts/user-part/header-user.php');
require('../../assets/parts/user-part/nav-user.php');

$docs = query_pengajar("SELECT * FROM ebook");
?>

<h3 style="text-align: center; margin: 2rem 0 4rem 0 ;">Jadwal</h3>
<div class="container mt-3">
    <table id="daftar-pengajar" class="table table-sm" style="text-align: center;">
        <thead>
            <tr>
                <th class="col" scope="col">NO</th>
                <th class="col" scope="col">E-book</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $i = 1; foreach($docs as $doc) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $doc["ebook"]; ?></td>
            </tr>
            <?php endforeach ; ?>
            </tbody>
</table>





<?php require('../../assets/parts/user-part/footer-user.php'); ?>