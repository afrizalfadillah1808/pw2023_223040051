<?php 
require('../../assets/sessions/session-admin.php');

require('../../assets/function/functions.php'); 
require('../../assets/parts/admin-part/header-admin.php');
require('../../assets/parts/admin-part/nav-admin.php');


$students = query_siswa("SELECT * FROM siswa");

?>



<h3 style="text-align: center; margin: 2rem 0 4rem 0 ;">Daftar Siswa</h3>
<div class="container mt-3">
    <table id="daftar-siswa" class="table table-sm" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col" style="width: 200px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($students as $student) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td>
                    <img src="../../img/siswaimg/<?= $student["foto"] ?>" width="50" height="50" class="rounded-circle">
                </td>
                <td><?= $student["nama_user"]; ?></td>
                <td><?= $student["email"]; ?></td>
                <td>
                    <a href="update-siswa.php?id=<?= $student["id"]; ?>">Ubah</a> |
                    <a href="side/delete-siswa.php?id=<?= $student["id"]; ?>" onclick="return confirm('Confirm');">Hapus</a>
                </td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</div>

<?php require('../../assets/parts/admin-part/footer-admin.php'); ?>
