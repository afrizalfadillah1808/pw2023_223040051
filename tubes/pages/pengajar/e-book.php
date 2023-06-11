<?php
require('../../assets/sessions/session-pengajar.php');

require('../../assets/function/functions.php');
require('../../assets/parts/pengajar-part/header-pengajar.php');
require('../../assets/parts/pengajar-part/nav-pengajar.php');

$docs = query_pengajar("SELECT *
                        FROM ebook
                        LEFT JOIN ebook_kategori ON ebook.id = ebook_kategori.id_ebook
                        LEFT JOIN kategori ON ebook_kategori.id_kategori = kategori.id");

// var_dump($docs); die();

if( isset($_POST["upload"]) ) {

//   var_dump($_FILES); die();
    
  if( add_ebook($_POST) > 0) {
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
    <table id="daftar_ebook" class="table table-striped table-bordered" style="text-align: center; width: 100%">
        <thead>
            <tr>
                <th class="col " width="5" scope="col">NO</th>
                <th class="col" scope="col">E-book</th>
                <th class="col" scope="col">Kategori</th>
                <th class="col" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $i = 1; foreach($docs as $doc) : ?>
            <tr>
                <td scope="row"><?= $i++; ?></td>
                <td><?= $doc["ebook"]; ?></td>
                <td><?= $doc["kategori"]; ?></td>
                <td>
                  <a href="kategori.php?id=<?= $doc["id"]; ?>">Tambah</a> |
                  <a href="side/delete-book.php?id=<?= $doc["id"]; ?>" onclick="return confirm('Confirm');">Hapus</a>
                </td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</div>
<center>
<form action="" method="post" enctype="multipart/form-data">
    <input class="form-control" type="file" name="ebook" id="ebook" style="width: 300px;">
    <button type="upload" name="upload" id="upload" style="margin-top: 1rem;">upload</button>   
</form>
</center>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
    $('#daftar_ebook').DataTable({
        responsive: true
    });
})
</script>




<?php require('../../assets/parts/pengajar-part/footer-pengajar.php'); ?>