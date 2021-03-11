<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="catalog-page">

	<main>

	<?=$v_aside?>

		<section id="cont" class="fix">

		<? $this->load->view('desktop/blocks/v_header'); ?>
        
		<h1><?=($lang == 'ru' ? 'Ошибка 404' : 'Помилка 404')?></h1>

        <p style="padding:0 10px">Страница не найдена.<br>Неправильно набран адрес или такой страницы на сайте больше не существует.<br>
        Перейдите на <a href="/">главную страницу</a> или выберите подходящую <a href="/catalog/">категорию</a></p>

		</section>

	</main>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>
