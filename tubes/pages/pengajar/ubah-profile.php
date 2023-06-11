<?php
require('../../assets/sessions/session-pengajar.php');

require('../../assets/function/functions.php');
require('../../assets/parts/pengajar-part/header-pengajar.php');
require('../../assets/parts/pengajar-part/nav-pengajar.php');

  // var_dump($_SESSION['pengajar']['id']); die();

$id = htmlspecialchars($_GET["id"]);

$pengajar = query_pengajar("SELECT * FROM pengajar WHERE id = $id")[0];
// var_dump($user['username']); die();
  
if( isset($_POST["ubah"]) ) {

    // var_dump($_POST);

    
    
    if( update_pengajar($_POST) > 0) {
        echo "
            <script>
                alert('Succes to Update!');
                //  document.location.href = 'user-view.php';
            </script>
        ";

        // header('Location: dashboard.php');
    } else {
        echo "
            <script>
                alert('Failed to Update!');
                // document.location.href = 'user-view.php';
            </script>
        ";
    }
    
}
?>

<style>
  .container h4 {
    margin-top: 2rem;
  }

  .container .card-title{
    margin: 1rem 0 1rem 0;
  }
</style>


<div class="container">
  <div class="card" style="align-items: center; text-align: center; margin-top: 2.5rem; margin-bottom: 2.5rem;">
    <div class="card-body"  style="width: 480px; height: 550px;">
    <h4 class="card-title">Ubah Profile</h4>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $pengajar["id"] ?>">
      <input type="hidden" name="oldfoto" value="<?= $pengajar["foto"]; ?>">

      <img src="../../img/pengajarimg/<?= $pengajar['foto'] ?>" style="height: 250px; width: 250px; border: 1px solid black; border-radius: 50%;">
      <input type="file" name="foto" id="foto">
      <input class="card-text" name="nama" value="<?= $pengajar['nama_pengajar']; ?>">
      <input class="card-text" name="nip" value="<?= $pengajar['nip']; ?>" readonly>
      <input type="text" name="username" value="<?= $pengajar['username']; ?>" pattern="[A-Za-z0-9@$&*\s]*">
      <input type="email" name="email" id="email" value="<?= $pengajar['email']; ?>">
      <button type="submit" name="ubah">Ubah</button>
    </form>
    </div>
  </div>
</div>

<?php require('../../assets/parts/pengajar-part/footer-pengajar.php'); ?>
