<?php
require('../../assets/sessions/session-admin.php');

require('../../assets/function/functions.php'); 
require('../../assets/parts/admin-part/header-admin.php');
require('../../assets/parts/admin-part/nav-admin.php');

$id = htmlspecialchars($_GET["id"]);

$pengajar = query_pengajar("SELECT * FROM pengajar WHERE id = $id")[0];
$pelajaran = query_pengajar("SELECT * FROM pelajaran");

if(isset($_POST["upload"])) {
// var_dump($_POST["kategori"]); die();
    if(pelajaran($_POST)) {
        echo "
          <script>
              alert('Succes to Add!');
              document.location.href = 'daftar-pengajar.php';
          </script>
      ";
  } else {
     echo "
          <script>
              alert('Failed to Add!');
              document.location.href = 'tambah.php';
          </script>
     ";
    }
}

?>


<h3 style="text-align: center; margin: 2rem 0 4rem 0 ;">E-Book</h3>
<div class="container mt-3">
    <table id="daftar-pengajar" class="table table-sm" style="text-align: center;">
        <thead>
        <tr>
            <tr>
                <th class="col" scope="col">NO</th>
                <th class="col" scope="col">NIP</th>
                <th class="col" scope="col">Nama</th>
                <th class="col" scope="col">Kategori</th>
                <th class="col" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <form action="" method="post">
            <tr>
                <th scope="row">+</th>
                <input type="hidden" name="idp" value="<?= $pengajar["id"] ?>" >
                <td><?= $pengajar["nip"]; ?></td>
                <td><?= $pengajar["nama_pengajar"]; ?></td>
                <td>
                    <select class="form-select form-select-sm" name="pelajaran" aria-label=".form-select-sm example" style="width: 300px;">
                        <option selected>Pilih Kategori</option>
                        <?php foreach($pelajaran as $plj) : ?>
                        <option value="<?= $plj["id"] ?>"><?= $plj["nama_pelajaran"] ?></option>
                        <?php endforeach ; ?>
                    </select>
                </td>
                <td><button type="upload" name="upload" id="upload" style="margin-top: 1rem;">upload</button></td>
            </tr>
            <tr>
              <th></th>
              </form>
            </tr>
        </tbody>
    </table>
</div>




<?php require('../../assets/parts/admin-part/footer-admin.php'); ?>