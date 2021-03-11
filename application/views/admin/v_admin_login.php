<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

	<title>Admin Login</title>

	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/admin.css"); ?>" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/css/main.css"); ?>" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->
  <body>
    <!-- ================================================== -->
    <div class="container main">
    <div class="row header">
      <div class="col-md-4">
      </div>

      <div class="col-md-8 text-right"></div>

    </div>

    <hr class="featurette-divider">

      <div class="row">
      <div class="col-md-5 text-center"></div>
      <div class="col-md-2 text-center">
        <form action="admin/check_password" method="post">
          <div class="form-group">
            <label for="exampleInputPassword1">Введите пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
          </div>
          <button type="submit" class="btn btn-default">Войти</button>
        </form>
      </div>
      <div class="col-md-5 text-center"></div>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- FOOTER -->
    <div class="container">
    <footer>
      <p>&copy; <? echo date('Y'); ?>  | php - <? echo phpversion(); ?> | <? echo CI_VERSION; ?></p>
    </footer>

    </div><!-- /.container -->

	<script type="text/javascript" src="/assets/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/js/adminside.js"></script>

</body>
</html>
