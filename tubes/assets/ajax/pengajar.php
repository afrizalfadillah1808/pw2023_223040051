<?php
require('../function/functions.php');

$keyword = $_GET["keyword"];

$sql = "SELECT pengajar.id, pengajar.nip, pengajar.username, pengajar.nama_pengajar, pengajar.email, pengajar.foto
        FROM pengajar
        WHERE 
        username LIKE '%$keyword%' OR
        nama_pengajar LIKE '%$keyword%' OR
        nip LIKE '%$keyword%' OR
        email LIKE '%$keyword%'";

$pengajar = query_pengajar($sql);


?>

<table id="daftar-pengajar" class="table table-sm" style="text-align: center;">
        <thead>
            </tr>
            <tr>
                <th class="col" scope="col">NO</th>
                <th class="col" scope="col">Gambar</th>
                <th class="col" scope="col">NIP</th>
                <th class="col" scope="col">Nama</th>
                <th class="col" scope="col">Username</th>
                <th class="col" scope="col">Email</th>
                <th class="col" scope="col-">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $i = 1; foreach($pengajar as $teacher) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td>
                    <img src="../../img/pengajarimg/<?= $teacher["foto"]; ?>" width="50" height="50" class="rounded-circle">
                </td>
                <td><?= $teacher["nip"]; ?></td>
                <td><?= $teacher["nama_pengajar"]; ?></td>
                <td><?= $teacher["username"]; ?></td>
                <td><?= $teacher["email"]; ?></td>
                <td>
                    <a href="../../pages/admin/update-pengajar.php?id=<?= $teacher["id"]; ?>">Ubah</a> |
                    <a href="side/delete-pengajar.php?id=<?= $teacher["id"]; ?>" onclick="return confirm('Confirm');">Hapus</a>
                </td>
            </tr>
            <?php endforeach ; ?>
            
        </tbody>

    </table>