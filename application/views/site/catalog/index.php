<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="catalog-page">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main class="main-content catalog-page">
  
	<div class="bg-catalog" style="background-image: url(/assets/img/catalog-backs/<?=(isset($category['id']) ? $category['id'].'-back.jpg' :'main-new.jpg')?>">
			<div class="full-width-container">
				<div class="inner-content-container w-lg-xl">
					
					<? $this->load->view('modules/promo/big-banner'); ?>

				</div>
			</div>

			<div class="full-width-container">
				<div class="inner-content-container w-lg-xl">
					<h1 class="txt-uppercase txt-center h-md mb-2 mt-4">
						<span class="gradient-title"><?=$h1_top?> <?=$h1_bot?></span>
					</h1>
				</div>
			</div>

			<div id="main-catalog">
				<div class="full-width-container catalog-second">
					<div class="inner-content-container w-lg-xl">

						<div id="catalog-wrapper">
							<div id="ftrs">
								<div class="ftrs-inner">
									<div class="cat-ftr" data-ftr="1">
										<div class="cat-ftr-title" data-ftr="1">
											<div class="first-title">
												<div class="text">Sound category</div>
												<img class="icon" src="/assets/img/icons/blue-arrow-left.svg" alt="Sound category">
											</div> 
											<span class="ftr-sel">All categories</span> <i class="darrsvg"></i>
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
											<div class="first-title">
												<div class="text">Product type</div>
												<img class="icon" src="/assets/img/icons/blue-arrow-left.svg" alt="Sound category">
											</div>
											<span class="ftr-sel">All types</span> <i class="darrsvg"></i>
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
											<div class="first-title">
												<div class="text">Product sorting</div>
												<img class="icon" src="/assets/img/icons/blue-arrow-left.svg" alt="Sound category">
											</div>
											<span class="ftr-sel">Default sorting</span> <i class="darrsvg"></i>
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
									<i class="more-products"></i>
								<? else: ?>
									<p style="color:#fff;">There are no products by selected parameters!</p>
								<? endif; ?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<? if($pagination['pages'] > 1): ?>
		<?=$pagination_html?>
		<? endif; ?>

  </main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>