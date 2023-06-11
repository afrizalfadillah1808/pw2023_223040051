<?php 
require('../../assets/sessions/session-admin.php');

require('../../assets/function/functions.php'); 
require('../../assets/parts/admin-part/header-admin.php');
require('../../assets/parts/admin-part/nav-admin.php');

$id = htmlspecialchars($_GET["id"]);

$tchr = query_pengajar("SELECT * FROM pengajar WHERE id = $id")[0];


if( isset($_POST["submit"]) ) {
    
    if( update_pengajar($_POST) > 0) {
        echo "
            <script>
                alert('Succes to Update!');
                document.location.href = 'daftar-pengajar.php';
            </script>
        ";
    } else {
       echo "
            <script>
                alert('Failed to Update!');
                document.location.href = 'daftar-pengajar.php';
            </script>
       ";
    }
    
}
?>  


<h3 style="text-align: center; margin: 2rem 0 4rem 0 ;">Edit Daftar</h3>
<div class="container mt-3">
    <table id="daftar-pengajar" class="table table-sm" style="text-align: center;">
        <thead>
            <tr>
                <th class="col" scope="col">Gambar</th>
                <th class="col" scope="col">NIP</th>
                <th class="col" scope="col">Nama</th>
                <th class="col" scope="col">Email</th>
                <th class="col" scope="col-">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $tchr["id"]; ?>">
                    <input type="hidden" name="oldfoto" required value="<?= $tchr["foto"]; ?>">
                    <td>
                        <img src="../../img/pengajarimg/<?= $tchr["foto"]; ?>" width="50" height="50" class="rounded-circle">
                        <input type="file" name="foto" id="foto" class="form-control" style="max-width: 300px; margin: 10px 0 0 0;">
                    </td>
                    <td>
                        <input type="text" name="nip" id="nip" class="form-control" required value="<?= $tchr["nip"]; ?>" autocomplete="off" pattern="[0-9]*" required readonly>    
                    </td>
                    <td>
                        <input type="text" name="nama" id="nama" class="form-control" required value="<?= $tchr["nama_pengajar"]; ?>" autocomplete="off" pattern="[A-Za-z0-9\s]*" required>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" class="form-control" required value="<?= $tchr["email"]; ?>" autocomplete="off" pattern="[A-Za-z0-9@.!*\s]*" required>
                    </td>
                    <td>
                        <button type="submit" name="submit" onclick="return confirm('Confirm');">   
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                                <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                            </svg>
                        </button>
                        <br>
                        Ubah
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
</div>

<?php require('../../assets/parts/admin-part/footer-admin.php'); ?>