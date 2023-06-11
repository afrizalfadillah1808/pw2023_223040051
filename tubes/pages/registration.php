<?php

require("../assets/parts/login-part/login-reg-header.php");
require("../assets/function/functions.php");


if( isset($_POST["signup"]) ) {
    
  if( registration_siswa($_POST) > 0) {
      echo "
      <script>
        alert('Success to Sign-up');
        document.location.href = 'login.php';
      </script>
      ";
  } else {
    echo mysqli_error($cdb);
  }
  
}

$name = 'Registration';
?>
<style>
  body{
    background: url('../img/bgimg/Login_1080p.jpg') no-repeat;
    background-position: center;
    background-size: cover;
  }

  .form{
    border: 1px solid rgba(255,255,255,0.5  ); 
    border-radius: 20px;
    padding: 1rem;
    backdrop-filter: blur(15px);
  }

  .form h2{
    font-size: 22px;
    color: white;
    text-align: center;
  }

  input{
    background: transparent;
  }

  .foto {
    margin-top: 1rem;
    background: transparent;
  }
</style>

	<div class="form regis_form">
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Registration</h2>
			      <div class="input_box">
                <i class="uil uil-user"></i>
              	<input type="text" name="username" placeholder="Enter your Username" pattern="[A-Za-z0-9\s]*" autocomplete="off" required />
            </div>
            <div class="input_box">
              	<input type="password" name="password" placeholder="Enter your password" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required />
              	<i class="uil uil-lock password"></i>
            </div>
            <div class="input_box">
              	<input type="password" name="password2" placeholder="Confirm password" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required />
              	<i class="uil uil-lock password"></i>
            </div>
            <div class="input_box">
                <i class="uil uil-user"></i>
              	<input type="text" name="nama" placeholder="Nama Lengkap" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required />
            </div>
            <div class="input_box">
              	<input type="email" name="email" placeholder="Email" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required />
            </div>
            <button class="submit" name="signup">Sign-up</button>
            <div class="back" style="font-size: 12px; margin: 1rem 0 1rem 5rem;">Ingin kembali? <a href="login.php" id="back">Kembali?</a></div>
        </form>
  </div>

<?php require("../assets/parts/login-part/login-reg-footer.php"); ?>