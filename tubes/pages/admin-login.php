<?php
session_start();

if ( isset($_SESSION["admin"]) ) {
	header("Location: admin/admin-view.php");
}

require("../assets/function/functions.php");

if( isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($cdb, "SELECT * FROM account_admin 
                                WHERE username = '$username'");

  if( mysqli_num_rows($result) === 1 ) {
    $row = mysqli_fetch_assoc($result);

    if( password_verify($password, $row["password"]) ) {
		
		$_SESSION["login"] = true;
	
		$_SESSION['admin'] = $row;
		header("Location: admin/admin-view.php");
		exit;
    }
  }

  $error = true;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- css -->
	<link rel="stylesheet" href="../css/log_reg.css">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

	<title>Log-in</title>
</head>
<body>
	<div class="card mb-3" style="max-width: 540px;">
		<div class="row g-0">
			<div class="col-md-4">
			<img src="../img/cardimg/strategy-study.jpg" class="img-fluid rounded-start" alt="strategy-study" style="height: 240px;">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">Log-in</h5>
						<?php if ( isset($error) ) : ?>
              				<p style="color: red; text-align: center;">Username atau Password Salah</p>
            			<?php endif ; ?>
					<form action="" method="post">
						<div class="section mb-3">
							<label for="username" class="form-label" style="text-align: start;">Username</label>
							<input type="text" name="username" placeholder="Enter Username" pattern="[A-Za-z\s]*" autocomplete="off" required>
						</div>
						<div class="section mb-3">
							<label for="username" class="form-label" style="text-align: start;" autocomplete="off">Password</label>
							<input type="password" name="password" placeholder="Enter Password" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required>
						</div>
						<div class="section" style="margin-bottom: 1rem;">
							<button class="btn btn-outline-dark" type="submit" name="login">Login</button>
						</div>
						<div class="back" style="font-size: 12px; margin: 1rem 0 1rem 5rem;">Ingin kembali? <a href="login.php" id="back">Kembali?</a></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>