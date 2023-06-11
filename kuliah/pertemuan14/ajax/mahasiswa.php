<?php
require ('../functions.php');

$keyword = $_GET["keyword"];

$query = "SELECT * FROM siswa
                WHERE
                nama LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                email LIKE '%$keyword%'";

$mahasiswa = query($query);

?>

<h1>Daftar Mahasiswa</h1>

<div id="container">
    <?php if($mahasiswa) : ?>
<table class="table">
  <thead>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>

            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
  </tbody>
</table>
<?php else : ?>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
                Not found!
            </div>
        </div>
    </div>
<?php endif ; ?>

