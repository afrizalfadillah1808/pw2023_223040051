<?php 
require('../../assets/sessions/session-admin.php');

require('../../assets/function/functions.php'); 
require('../../assets/parts/admin-part/header-admin.php');
require('../../assets/parts/admin-part/nav-admin.php');

$jadwal = query_pengajar("SELECT * FROM jadwal");

if( isset($_POST["add"]) ) {
    
    if( add_jadwal($_POST) > 0) {
        echo "
            <script>
                alert('Succes to Add!');
                document.location.href = 'tambah-jadwal.php';
            </script>
        ";
    } else {
       echo "
            <script>
                alert('Failed to Add!');
                document.location.href = 'tambah-jadwal.php';
            </script>
       ";
    }
    
}


?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam Masuk</th>
      <th scope="col">Jam Selesai</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach($jadwal as $jdwl) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $jdwl["tanggal_masuk"]; ?></td>
      <td><?= $jdwl["jam_masuk"]; ?></td>
      <td><?= $jdwl["jam_keluar"]; ?></td>
      <td><a href="side/delete-jadwal.php?id=<?= $jdwl["id"]; ?>">Hapus</a></td>
    </tr>
    <?php endforeach ; ?>
    <form action="" method="post">
        <tr>
            <th scope="row">+</th>
            <td>
                <input type="date" name="date" id="date">
            </td>
            <td>
                <select class="form-select form-select-sm" name="jmasuk" aria-label=".form-select-sm example" style="width: 300px;">
                    <option selected>Pilih Jam Masuk</option>
                    <option value="13:00:00">13:00:00</option>
                    <option value="14:00:00">14:00:00</option></option>
                    <option value="15:00:00">15:00:00</option>
                </select>
            </td>
            <td>
                <select class="form-select form-select-sm" name="jkeluar" aria-label=".form-select-sm example" style="width: 300px;">
                    <option selected>Pilih Kategori</option>
                    <option value="15:00:00">15:00:00</option>
                    <option value="16:00:00">16:00:00</option>
                    <option value="17:00:00">17:00:00</option>
                </select>
            </td>
            <td>
                <button type="submit" name="add" style="padding: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg>
                </button>
            </td>
        </tr>
    </form>
  </tbody>
</table>

<?php require('../../assets/parts/admin-part/footer-admin.php'); ?>