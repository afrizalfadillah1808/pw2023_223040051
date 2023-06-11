<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
    .login_form{
      border-radius: 20px;
      padding: 1rem;
    }
    .active .login_form {
      padding: 25rem;
      display: none;
    }

    .login_form h2 {
      font-size: 22px;
      color: #0b0217;
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
    .input_box i.pw_hide {
      right: 0;
      font-size: 18px;
      cursor: pointer;
    }
    .option a {
      margin: 14px 0 14px 0;
      text-align: center;
      max-width: 500px;
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

    .login_signup {
      font-size: 12px;
      text-align: center;
      margin-top: 15px;
    }
	</style>

	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
	<!-- css -->
	<link rel="stylesheet" href="../css/log_reg.css">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

	<title>Log-in</title>
</head>
<body>