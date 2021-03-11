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

	<title>Admin</title>

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
        <br>
        ADMIN
      </div>

      <div class="col-md-8 text-right">
        <br>
        <a href="/admin513/logout">Выйти</a>
      </div>

    </div>

    <hr class="featurette-divider">

    <div class="row">
            <div class="col-md-3" style="margin-bottom:30px;">

              <div id="actions">

<!--                 <a href="#" class="list-group-item ajax-action" data-action="show_clients">
                <p class="list-group-item-heading">
                  <button type="button" class="btn btn-link btn-xs pull-right ajax-action"  data-action="show_client_form" id="addClient"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                  <strong class="" id="showClients">Клиенты</strong>
                </p>
                </a> -->

                <a href="#" class="list-group-item ajax-action" data-action="show_pages">
                <p class="list-group-item-heading">
                  <button type="button" class="btn btn-link btn-xs pull-right ajax-action"  data-action="show_page_form" id="addPage"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                  <strong class="" id="showPages">Структура сайта</strong>
                </p>
                </a>

 
<!-- 
 -->

                <a href="#" class="list-group-item ajax-action" data-action="show_promocodes">
                  <p class="list-group-item-heading">

                    <button class="btn btn-link btn-xs pull-right ajax-action" data-action="show_promocode_form" style="margin-left:10px;" type="button" id="addCode">
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button>

                    <strong class="" id="showCodes">Промокоды</strong>
                  </p>
                </a>





<!--                 <a href="#" class="list-group-item ajax-action" data-action="show_slides">
                  <p class="list-group-item-heading">

                    <button class="btn btn-link btn-xs pull-right ajax-action" data-action="show_slide_form" style="margin-left:10px;" type="button" id="addSlide">
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button>

                    <strong class="" id="showSlides">Слайды</strong>
                  </p>
                </a> -->


                <a href="#" class="list-group-item ajax-action" data-action="show_reviews">
                  <p class="list-group-item-heading">
                    <strong class="" id="showReviews">Отзывы</strong>
                  </p>
                </a> 

                <a href="#" class="list-group-item ajax-action" data-action="show_settings_form">
                  <p class="list-group-item-heading">
                    <strong class="" id="showSettings">Настройки</strong>
                  </p>
                </a>

              </div>
            </div>
            <div class="col-md-9">
              <div class="content">

                <div id="alert"></div>

                <div id="dynamic">

                  <div class="panel panel-default">

                    <div class="panel-heading">
                      <h3 class="panel-title">Админ панель</h3>
                    </div>

                      <div class="panel-body">
                          <p>Выберите раздел слева</p>
                          <p>Для добавления, нажмите на [+]</p>
                      </div>
                  </div>

                </div>

              </div>
            </div>
          </div>

    <hr class="featurette-divider">

    <!-- FOOTER -->
    <div class="container">
    <footer>
      <p>&copy; <? echo date('Y'); ?> | php - <? echo phpversion(); ?> | <? echo CI_VERSION; ?></p>
    </footer>

    </div><!-- /.container -->

  <?php $rand = rand(0,100); ?>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/adminside.js?$rand"); ?>"></script>

</body>
</html>
