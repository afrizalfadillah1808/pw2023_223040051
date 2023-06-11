<?php
require ('functions.php');

$mahasiswa = query("SELECT * FROM siswa");


if(isset($_GET["search"])) {
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM siswa
                WHERE
                nama LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                email LIKE '%$keyword%'";

    $mahasiswa = query($query);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
    <title>Halaman Admin</title>
</head>

<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<div class="row">
    <div class="col-md-6">
        <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Search">
            <button class="btn btn-primary" name="search" type="submit" id="search-button">Search</button>
        </div>
        </form>
    </div>
</div>
<br>
<div id="search-container">
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
</div>

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>

</html>