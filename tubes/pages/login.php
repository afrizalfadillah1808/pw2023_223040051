<?php
session_start();

require("../assets/parts/login-part/login-reg-header.php");
require("../assets/function/functions.php");

if(isset($_COOKIE['bread']) && isset($_COOKIE['cips'])) {
  $id = isset($_COOKIE['bread']) ? $_COOKIE['bread'] : null;
  $key = isset($_COOKIE['cips']) ? $_COOKIE['cips'] : null;  

  $result = mysqli_query($cdb, "SELECT username FROM siswa 
                                WHERE id = $id");
  $row = mysqli_fetch_assoc($result);                             
  
  if($key === hash('sha512', $row['username'] ?? '')) {
    $_SESSION['login'] = true;

  }
}

if ( isset($_SESSION["login"]) ) {
	header("Location: user/user-view.php");
}


if( isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($cdb, "SELECT * FROM siswa
                                WHERE username = '$username'");

  if( mysqli_num_rows($result) === 1 ) {
    $row = mysqli_fetch_assoc($result);

    if( password_verify($password, $row["password"]) ) {
      $_SESSION["login"] = true;

      if( isset($_POST['remember']) ) {

          setcookie('bread', $row['id'], time() + 60);
          setcookie('cips', hash( 'sha512', $row['username']), time() + 60 );
      }

      $_SESSION['siswa'] = $row;
      header("Location: user/user-view.php");
      exit;
    }
  }

  $error = true;
}
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
    color: #0b0217;
    text-align: center;
  }

  input{
    background: transparent;
  }
</style>

	<div class="form login_form">
        <form action="" method="post">
            <h2>Login</h2>

            <?php if ( isset($error) ) : ?>
              <p style="color: red; text-align: center;">Username atau Password Salah</p>
            <?php endif ; ?>

            <div class="input_box">
                <i class="uil uil-user"></i>
              	<input type="text" name="username" placeholder="Enter Username" pattern="[A-Za-z0-9\s]*" autocomplete="off" required>
            </div>
            <div class="input_box">
              	<input type="password" name="password" placeholder="Enter Password" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required>
              	<i class="uil uil-lock password"></i>
            </div>

            <div class="option_field">
              <session>
                <input type="checkbox" name="remember" id="remember">
                 <label for="remember">Remember Me?</label>   	
              </session>
              <br>
              <session style="margin-left: 5.5rem;">
                <a href="admin-login.php" style="margin-right: 1rem;">Admin</a>
					      <a href="login-pengajar.php">Pengajar</a>
              </session>
            </div>
            <button class="submit" name="login">Login</button>
            <div class="login_signup">Belum Punya Akun? <a href="registration.php" id="signup">Sig-nup</a></div>
        </form>
          <a href="../index.php" style="text-align: center;">&lt;Kembali</a>
  </div>

  

<?php require("../assets/parts/login-part/login-reg-footer.php"); ?>