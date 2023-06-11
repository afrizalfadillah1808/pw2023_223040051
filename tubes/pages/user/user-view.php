<?php
require('../../assets/sessions/session-user.php');

require('../../assets/function/functions.php');
require('../../assets/parts/user-part/header-user.php');
require('../../assets/parts/user-part/nav-user.php');

// var_dump($_SESSION['account_user']['id']); die();
  $sql ="SELECT siswa.id, siswa.nama_user, siswa.email, siswa.foto, siswa.username
          FROM siswa
          WHERE siswa.id = {$_SESSION['siswa']['id']}";
  
  $result = mysqli_query($cdb, $sql);
  $user = mysqli_fetch_assoc($result);

  // var_dump($user);
                
?>

<style>
  .container h4 {
    margin-top: 0.5rem;
  }

  .container .card-title{
    margin: 1rem 0 1rem 0;
  }
</style>



<div class="container">
  <div class="card" style="align-items: center; text-align: center; margin-top: 2.5rem;">
    <div class="card-body"  style="width: 480px; height: 480px;">
      <h4 class="card-title">Profile</h4>
      <img src="../../img/siswaimg/<?= $user['foto'] ?>" style="height: 250px; width: 250px; border: 1px solid black; border-radius: 50%;">
      <h4 class="card-text"><?= $user['username']; ?></h4>
      <h4 class="card-text"><?= $user['nama_user']; ?></h4>
      <h4 href="#" class="card-link"><?= $user['email']; ?></h4>
      <a href="ubah-profile.php?id=<?= $user['id'] ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
          <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
        </svg>
      </a>
    </div>
  </div>
</div>


<?php require('../../assets/parts/user-part/footer-user.php'); ?>
