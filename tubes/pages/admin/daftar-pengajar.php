<?php 
require('../../assets/sessions/session-admin.php');

require('../../assets/function/functions.php'); 
require('../../assets/parts/admin-part/header-admin.php');
require('../../assets/parts/admin-part/nav-admin.php');


$pengajar = query_pengajar("SELECT pengajar.id, pengajar.nip, pengajar.nama_pengajar, pengajar.username, pengajar.email, pengajar.foto, pelajaran.nama_pelajaran
                            FROM pengajar
                            LEFT JOIN pengajar_pelajaran ON pengajar.id = pengajar_pelajaran.id_pengajar
                            LEFT JOIN pelajaran ON pengajar_pelajaran.id_pelajaran = pelajaran.id ");
?>  
<style>
    #form-search {
        position: flex;
        justify-content: center;
    }

</style>

<h3 style="text-align: center; margin: 2rem 0 4rem 0 ;">Daftar Pengajar</h3>    
<div class="container mt-3" id="container">
    <table id="daftar-pengajar" class="table table-striped table-bordered" style="text-align: center; width: 100wh;">
        <thead>
            </tr>
            <tr>
                <th class="col" scope="col">NO</th>
                <th class="col" scope="col">Gambar</th>
                <th class="col" scope="col">NIP</th>
                <th class="col" scope="col">Nama</th>
                <th class="col" scope="col">Username</th>
                <th class="col" scope="col">Email</th>
                <th class="col" scope="col">Pelajaran</th>
                <th class="aksi">Aksi</th>
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
                <td><?= $teacher["nama_pelajaran"]; ?></td>
                <td>
                    <a href="update-pengajar.php?id=<?= $teacher["id"]; ?>">Ubah</a> |
                    <a href="side/delete-pengajar.php?id=<?= $teacher["id"]; ?>" onclick="return confirm('Confirm');">Hapus</a> |
                    <a href="tambah.php?id=<?= $teacher["id"]; ?>">Tambah</a>
                </td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</div>

<?php require('../../assets/parts/admin-part/footer-admin.php'); ?>
