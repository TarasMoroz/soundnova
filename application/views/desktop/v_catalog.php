<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="catalog-page">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>

		<section id="main" class="content">

		<div id="main-catalog">
			<div class="inner1530">

				<div class="catalog-bundle">
					<div class="catalog-bundle-left">
						<img class="bundle-title" src="/assets/img/summersale.png" alt="summer sale">
						<p class="bundle-title-blue">Ultimate bundle offer</p>
						<button class="btn-purp-grad btn-catalog-bundle">BUY OUT $299 <s>$1000</s></button>
					</div>

					<div class="catalog-bundle-img">
						<img src="/assets/img/ultimate-bundle.png" alt="best back">
					</div>

					<div class="catalog-bundle-timer">
						<div class="timer">
							<p class="timer-text">SALE WILL END IN</p>
							<div class="timer-counter">
								<div class="timer-counter-item">
									<b>02</b>
									<span>days</span>
								</div>
								<div class="timer-counter-item">
									<b>23</b>
									<span>hours</span>
								</div>
								<div class="timer-counter-item">
									<b>45</b>
									<span>mins</span>
								</div>
								<div class="timer-counter-item">
									<b>20</b>
									<span>sec</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h1 class="grad"><?=$h1?></h1>

				<div id="catalog-wrapper">
					<div id="ftrs">
						<div class="ftrs-inner">
							<div class="cat-ftr" data-ftr="1">
								<div class="cat-ftr-title" data-ftr="1">
									<span>Sound category</span> <span class="ftr-sel">All categories</span> <i class="darrsvg"></i>
								</div>

								<div class="cat-ftr-cont">
									<a href="/catalog/<?=(isset($type['id'])?'type/'.$type['alias'].'/':'')?>" <?=(!isset($category['id'])?'class="act"':'')?>>
										<span class="switch"></span>
										<span class="name">All categories</span>
									</a>

									<? foreach($cats as $cat): ?>
										<a href="/catalog/<?=$cat['alias']?>/<?=(isset($type['id'])?'type/'.$type['alias'].'/':'')?>" <?=(isset($category['id']) && $cat['id']==$category['id']?'class="act"':'')?>>
											<span class="switch"></span>
											<span class="name"><?=$cat['name']?></span>
										</a>
									<? endforeach; ?>
								</div>
							</div>
						</div>

						<div class="ftrs-inner">
							<div class="cat-ftr" data-ftr="2">
								<div class="cat-ftr-title" data-ftr="2">
									<span>Product type</span> <span class="ftr-sel">All types</span> <i class="darrsvg"></i>
								</div>

								<div class="cat-ftr-cont">
									<a href="/catalog/<?=(isset($category['id'])?$category['alias'].'/':'')?>" <?=(!isset($type['id'])?'class="act"':'')?>>
										<span class="switch"></span>
										<span class="name">All types</span>
									</a>
									<? foreach($types as $item): ?>
										<a href="/catalog/<?=(isset($category['id'])?$category['alias'].'/':'')?>type/<?=$item['alias']?>/" <?=(isset($type['id']) && $item['id']==$type['id']?'class="act"':'')?>>
											<span class="switch"></span>
											<span class="name"><?=$item['name']?></span>
										</a>
									<? endforeach; ?>
								</div>
							</div>
						</div>

						<div class="ftrs-inner">
							<div class="cat-ftr" data-ftr="3">
								<div class="cat-ftr-title" data-ftr="3">
									<span>Product sorting</span> <span class="ftr-sel">Default sorting</span> <i class="darrsvg"></i>
								</div>

								<div class="cat-ftr-cont">
									<? $sorting = ['def' => 'Default sorting',  'latest' => 'Sort by latest', 'price_asc' => 'Sort by price: low to high', 'price_desc' => 'Sort by price: hight to low']; ?>

									<? foreach($sorting as $key => $name): ?>
										<a href="/catalog/<?=(isset($category['id'])?$category['alias'].'/':'')?><?=(isset($type['id'])?'type/'.$type['alias'].'/':'')?><?=($key != 'def' ? '?sort='.$key : '')?>" <?=($key == $sort ?'class="act"':'')?>>
											<span class="switch"></span>
											<span class="name"><?=$name?></span>
										</a>
									<? endforeach; ?>
								</div>
							</div>
						</div>
					</div>

					<div id="prods" class="prods">
						<? if(!empty($products)): ?>
							<? $this->load->view('desktop/v_product_list', ['prod_list'=>$products, 'prod_list_slider'=>false]); ?>
						<? else: ?>
							<p style="color:#fff;">There are no products by selected parameters!</p>
						<? endif; ?>
					</div>
				</div>
			</div>
		</div>

		<? if($pagination['pages'] > 1): ?>
		<?=$pagination_html?>
		<? endif; ?>

		</section>

	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
