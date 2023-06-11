<?php
require('../../assets/sessions/session-admin.php');

require("../../assets/function/functions.php");
require('../../assets/parts/admin-part/header-admin.php');
require('../../assets/parts/admin-part/nav-admin.php');

if( isset($_POST["add"]) ) {

    
    if( add_pengajar($_POST) > 0) {
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
                document.location.href = 'daftar-pengajar.php';
            </script>
       ";
    }
    
}

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
    #form-option a{
        margin-left: 10px;
    }
    .login_form{
        border: 1px solid black; 
        border-radius: 5%;
        padding: 1rem;
    }

    .active .login_form {
        padding: 25rem;
        display: none;
    }

    .form{
        margin-left: 27.5rem;
        margin-top: 4rem;
    }

    .form h2 {
    font-size: 22px;
    color: black;
    text-align: center;
    }
    .input_box {
    position: relative;
    margin-top: 30px;
    width: 100%;
    height: 40px;
    }
    .input_box input {
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    padding: 0 30px;
    color: #333;
    transition: all 0.2s ease;
    border-bottom: 1.5px solid #aaaaaa;
    }
    .input_box input:focus {
    border-color: #7d2ae8;
    }
    .input_box i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
        color: #707070;
    }
    .input_box i.email,
    .input_box i.password {
    left: 0;
    }
    .input_box input:focus ~ i.email,
    .input_box input:focus ~ i.password {
        color: #7d2ae8;
    }

    .form_container a {
        color: #7d2ae8;
        font-size: 12px;
    }
    .form_container a:hover {
        text-decoration: underline;
    }

    .submit {
        border: none;
        color: white;
        width: 300px; 
        padding: 1rem;
        background: #7d2ae8;
        margin-top: 30px;
        padding: 10px 0;
        border-radius: 10px;
    }

    .submit:hover{
        background-color: blue;
	    transition-duration: 1s;
    }

  </style>
  
      <div class="form regis_form" style="width: 400px; border: 1px solid black;">
          <form action="" method="post" enctype="multipart/form-data">
              <h2>Tambah Pengajar</h2>
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
              <div class="foto">
                <input type="file" name="foto" id="foto" class="form-control" style="max-width: 300px; background-color: transparent;" autocomplete="off" required>
              </div>
              <div class="input_box">
                  <i class="uil uil-user"></i>
                    <input type="text" name="nama" placeholder="Nama Lengkap" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required />
              </div>
              <div class="input_box">
                  <i class="uil uil-user"></i>
                    <input type="text" name="nip" placeholder="Masukkan nip" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required />
              </div>
              <div class="input_box">
                    <input type="email" name="email" placeholder="Email" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required />
              </div>
              <button class="submit" name="add">Tambah</button>
            </form>
    </div>



<?php require('../../assets/parts/admin-part/footer-admin.php');?>