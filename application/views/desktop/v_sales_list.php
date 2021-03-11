<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="catalog-page">

	<main>

		<?=$v_aside?>

		<section id="cont" class="fix">

		<? $this->load->view('desktop/blocks/v_header'); ?>

		<div id="brdcrmbs">
			<a href="/<?=$lang?>/"><?=($lang == 'ru' ? 'Главная' : 'Головна')?></a> 
			<span class="sep"> / </span>
			<span class="text"><?=($lang == 'ru' ? 'Акции' : 'Акції')?></span>
		</div>
		
		<div id="blogposts-wrapper">
		
			<div>
				<h1> <?=($lang == 'ru' ? 'Акции' : 'Акції')?> </h1>
				
				<div id="blogposts">
					<? if(count($sales)): ?>
					<? foreach($sales as $sale): ?>
						<a href="/<?=$lang?>/sale/<?=$sale['id']?>/" class="blogpost">
							<div class="im" style="background-image:url(<?=($sale['img'] ? '/assets/sale/'.$sale['img'] : '/assets/img/blogpost.jpg')?>);"></div>
							<div class="blogpost-text">
								<b class="blogpost-title"><?=$sale['name_'.$lang]?></b>
								<span class="blogpost-desc"><?=$sale['description_'.$lang]?></span>
							</div>
						</a>
					<? endforeach; ?>
					<? endif; ?>
				</div>
			</div>
		</div>

		</section>

	</main>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>
