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
			<a href="/<?=$lang?>/blog/"><?=($lang == 'ru' ? 'Блог' : 'Блог')?></a>
		</div>
		
		<div id="post-wrapper">
		
			<div id="post">
				<h1><?=$post['name_'.$lang]?></h1>

				<div class="date"><?=date('d.m.Y, H:i', $post['date_add'])?></div>
				
				<div id="post-text" class="formatted-text">
					<?=$post['text_'.$lang]?>
				</div>
			</div>

			<div id="blogposts-aside">
				<? if(count($pop_posts)): ?>

				<div class="blogposts-aside-title"><?=($lang == 'ru' ? 'Популярное' : 'Популярне')?></div>
				
				<div class="blogposts-aside-posts">
					<? foreach($pop_posts as $post): ?>
					<a href="/<?=$lang?>/blog/<?=$post['alias']?>/">
						<div class="im" style="background-image:url(<?=($post['img'] ? '/assets/blog/'.$post['img'] : '/assets/img/blogpost.jpg')?>);"></div>
						<div class="txt">
							<div class="tit"><?=$post['name_'.$lang]?></div>
							<div class="date"><?=date('d.m.Y, H:i', $post['date_add'])?></div>
						</div>
					</a>
					<? endforeach; ?>
				</div>

				<? endif; ?>
			</div>
		</div>

		</section>

	</main>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>
