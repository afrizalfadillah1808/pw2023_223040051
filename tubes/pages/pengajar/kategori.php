<?php
require('../../assets/sessions/session-pengajar.php');

require('../../assets/function/functions.php');
require('../../assets/parts/pengajar-part/header-pengajar.php');
require('../../assets/parts/pengajar-part/nav-pengajar.php');

$id = htmlspecialchars($_GET["id"]);

$ebook = query_pengajar("SELECT * FROM ebook WHERE id = $id")[0];
$kategori = query_pengajar("SELECT * FROM kategori");

if(isset($_POST["upload"])) {
// var_dump($_POST["kategori"]); die();
    if(kategori($_POST)) {
        echo "
          <script>
              alert('Succes to Add!');
              document.location.href = 'e-book.php';
          </script>
      ";
  } else {
     echo "
          <script>
              alert('Failed to Add!');
              document.location.href = 'e-book.php';
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
                <th class="col" scope="col">E-book</th>
                <th class="col" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <form action="" method="post">
            <tr>
                <th scope="row">+</th>
                <input type="hidden" name="ide" value="<?= $ebook["id"] ?>" >
                <td><?= $ebook["ebook"]; ?></td>
            </tr>
            <tr>
              <th></th>
              <td>
                <select class="form-select form-select-sm" name="kategori" aria-label=".form-select-sm example" style="width: 300px;">
                    <option selected>Pilih Kategori</option>
                    <?php foreach($kategori as $ktg) : ?>
                    <option value="<?= $ktg["id"] ?>"><?= $ktg["kategori"] ?></option>
                    <?php endforeach ; ?>
                </select>
              </td>
              <td><button type="upload" name="upload" id="upload" style="margin-top: 1rem;">upload</button></td>
              </form>
            </tr>
        </tbody>
    </table>
</div>


<?php require('../../assets/parts/pengajar-part/footer-pengajar.php'); ?>