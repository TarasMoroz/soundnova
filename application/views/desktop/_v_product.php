<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="product-page">

	<main>

	<?=$v_aside?>

		<section id="cont" class="fix"> 

		<? $this->load->view('desktop/blocks/v_header'); ?>

		<div id="brdcrmbs">
			<a href="/<?=$lang?>/"><?=($lang == 'ru' ? 'Главная' : 'Головна')?></a> 
			<span class="sep"> / </span>
			<a href="/<?=$lang?>/catalog/"><?=($lang == 'ru' ? 'Каталог' : 'Каталог')?></a> 
			<span class="sep"> / </span>
			<a href="/<?=$lang?>/catalog/<?=$category['alias']?>/"><?=$category['name_'.$lang]?></a>
			<span class="sep"> / </span>
			<span class="text"><?=$product['name_'.$lang]?></span>
		</div>

		<script type="application/ld+json">
	    {
	      "@context": "https://schema.org",
	      "@type": "BreadcrumbList",
	      "itemListElement": [{
	        "@type": "ListItem",
	        "position": 1,
	        "name": "ClimatMall",
	        "item": "https://climatmall.com.ua/<?=$lang?>/"
	      },{
	        "@type": "ListItem",
	        "position": 2,
	        "name": "<?=($lang == 'ru' ? 'Кондиционеры' : 'Кондиціонери')?>",
	        "item": "https://climatmall.com.ua/<?=$lang?>/catalog/"
	      },{
	        "@type": "ListItem",
	        "position": 3,
	        "name": "<?=$product['name_'.$lang]?>"
	      }]
	    }
	    </script>

		<?
			// Определяем превью

			$extensions = ['jpg','jpeg','png','gif'];

			$defim = '/assets/img/prod-md.jpg';
			$allImages = [];

			$prodIms = glob("./assets/products/".$product['id']."/*");
			if(count($prodIms)){
				foreach($prodIms as $pim){
					$fArr = pathinfo($pim);
					
					if(in_array($fArr['extension'], $extensions)){
						$im = '/assets/products/'.$product['id'].'/'.$fArr['basename'];
						if($fArr['filename'] == 'main'){
							array_unshift($allImages, $im);
						} else {
							array_push($allImages, $im);
						}
					}
				}
			}
		?>

		<script type="application/ld+json">{ "@context": "http://schema.org/", "@type": "Product", "name": "<?=$product['name_'.$lang]?>", "image": "https://climatmall.com.ua<?=(count($allImages) ? $allImages[0] : $defim)?>", "sku":"<?=$product['id']?>", "mpn":"<?=$product['mpn']?>", "brand":"<?=$product['brand']?>", "description": "<?=$product['name_'.$lang]?>", "aggregateRating": { "@type": "AggregateRating", "ratingValue": "<?=($product['avg_rate'] ? $product['avg_rate'] : 4.5)?>", "reviewCount": "<?=($product['cnt_comments'] ? $product['cnt_comments'] : 2)?>", "worstRating":0, "bestRating":5 }, "offers": { "@type": "Offer", "priceCurrency": "UAH", "price": "<?=price_grn($product['price'], $s['kurs'])?>", "itemCondition": "http://schema.org/NewCondition", "url":"https://climatmall.com.ua/<?=$lang?>/product/<?=$product['alias']?>/", "availability": "<?=($product['stock'] ? 'http://schema.org/InStock' : 'http://schema.org/OutOfStock')?>", "seller": { "@type": "Organization", "name": "ClimatMall" } }}</script>

		<div id="prcard">
			<div id="prcard-inf">
				<h1><?=$product['name_'.$lang]?></h1>

				<? $prdsObj = ['id'=>$product['id'], 'c'=>1, 't'=>$product['name_'.$lang], 'im' => (count($allImages) ? $allImages[0] : $defim), 'a'=>$product['alias'], 'p'=> price_grn($product['price'], $s['kurs'])]; ?>

				<script> 
					var prodcardId = <?=$product['id']?>; 
						prds["<?=$product['id']?>"] = <?=json_encode($prdsObj)?>;
				</script>

				<div id="prcard-inf-inner">
					<div id="prcard-im">
						<div id="pr-im">
							<? if($product['discount_percent']): ?>
							<span class="prd-disc-layer"></span>
							<span class="prd-disc"> -<?=$product['discount_percent']?>% </span>
							<? endif; ?>

							<? if(count($allImages)): ?>
							<img id="mainim" class="media" data-p='{"id":"gdgt","num":0,"t":"img"}' src="<?=$allImages[0]?>" alt="<?=$product['name_'.$lang]?>"/>
							<?  else: ?>
							<img id="mainim" class="media" data-p='{"id":"gdgt","num":0,"t":"img"}' src="<?=$defim?>" alt="<?=$product['name_'.$lang]?>"/>
							<? endif; ?>
						</div>
						
						<? if(count($allImages)): ?>
						<div id="pr-im-prev">
							<div class="swiper-container" id="pthumbimgslider">
								<div class="swiper-wrapper">
						  		<? foreach($allImages as $key => $im): ?>
								  	<div class="swiper-slide">
								  		<div class="pr-im-prev <?=($key==0?'pr-im-prev-act':'')?> media-thumb" data-i="<?=$key?>" data-p='{"id":"gdgt","num":<?=$key?>,"t":"img"}'>
								  			<img data-i="<?=$key?>" src="<?=$im?>" alt="<?=$product['name_'.$lang]?>">
								  		</div>
								  	</div>
						  		<? endforeach; ?>
							  	</div>
							</div>
						</div>
						<? endif; ?>
					</div>

					<script>
						var mediaData = {'gdgt': {"img": <?=json_encode($allImages)?>,"vid":""}};
					</script>

					<div id="prcard-buy">
						<div id="pr-stock">
							<? if($product['stock']): ?>
								<span id="pr-in-stock"> <i class="checksvg"></i> <?=($lang == 'ru' ? 'В наличии' : 'В наявності')?> </span>
							<? else: ?>
								<span id="pr-not-in-stock"> <?=($lang == 'ru' ? 'Нет в наличии' : 'Немає в наявності')?> </span>
							<? endif; ?>

							<? if($product['avg_rate'] > 0): ?>
							<span id="pr-rate">
								<div class="stars" data-value="5">
									<i data-value="1" class="starsvg <?=($product['avg_rate'] >= 1 ? 'act' : '')?>"></i>	
									<i data-value="2" class="starsvg <?=($product['avg_rate'] >= 2 ? 'act' : '')?>"></i>	
									<i data-value="3" class="starsvg <?=($product['avg_rate'] >= 3 ? 'act' : '')?>"></i>	
									<i data-value="4" class="starsvg <?=($product['avg_rate'] >= 4 ? 'act' : '')?>"></i>	
									<i data-value="5" class="starsvg <?=($product['avg_rate'] >= 5 ? 'act' : '')?>"></i>
								</div>

								<? $wArr = ($lang == 'ru') ? ["отзыв","отзыва", "отзывов"] : ["відгук","відгука", "відгуків"]; ?>
								
								<div id="pr-cnt-revs">
									<?=$product['cnt_comments']?> <?=wEnd($product['cnt_comments'], $wArr)?>
								</div>
							</span>
							<? endif; ?>
							
							<? if($product['mpn']): ?>
							<span id="pr-article"> <?=($lang == 'ru' ? 'Код производителя' : 'Код виробника')?>: <?=$product['mpn']?> </span>
							<? endif; ?>

							<div class="stars" style="display: none;"></div>
						</div>
						
						<div id="pr-price-buy">
							<div class="price">
								<?=price_grn($product['price'], $s['kurs'])?> грн. 
								<? if($product['price_old']): ?><span class="price_old"><?=price_grn($product['price_old'], $s['kurs'])?> грн.</span><? endif; ?>
							</div>
							
							<div class="buy">
								<? if($product['stock']): ?>
								<a href="#" class="prd-buy" data-id="<?=$product['id']?>"><?=($lang == 'ru' ? 'Купить' : 'Купити')?></a>
								<!-- <a href="#" class="prd-buy-fast"><?//=($lang == 'ru' ? 'Быстрая покупка' : 'Швидка покупка')?></a> -->
								<? else: ?>
									<?=($lang == 'ru' ? 'Нет в наличии' : 'Немає в наявності')?>
								<? endif; ?>
							</div>
						</div>

						<div id="prcard-btns">
							<a href="#" class="prd-fav" data-id="<?=$product['id']?>">
								<i class="favsvg"></i> 
								<span><?=($lang == 'ru' ? 'В избранное' : 'В обране')?></span>
							</a>
							<a href="#" class="prd-comp" data-id="<?=$product['id']?>">
								<i class="compsvg"></i> 
								<span><?=($lang == 'ru' ? 'Сравнить' : 'Порівняти')?></span>
							</a>
						</div>

						<? $pFilters = json_decode($product['filters']); ?>
						
						<? if(!empty($pFilters)): ?>
						<div id="prcard-chars">
							<? $shownGrps = []; foreach($pFilters as $pfalias): if(isset($ftrs[$pfalias])): ?>
							<span class="pr-char-row">
								<b> <?=$ftrs[$pfalias]['g_name_'.$lang]?>: </b>
								<a href="/<?=$lang?>/catalog/<?=$product['alias_catalog']?>/filter/<?=$pfalias?>/"> 
									<?=$ftrs[$pfalias]['name_'.$lang]?> 
								</a>
							</span>
							<? $shownGrps[] = $ftrs[$pfalias]['g_id']; endif; endforeach; ?>
						</div>
						<? endif; ?>
					</div>
				</div>
			</div>

			<div id="prcard-rght">
				
				<? if(count($analogs)): ?>
				<div id="analog">
					<div id="analog-head">Аналоги</div>
					<? $i=0; foreach($analogs as $prod): if($i == 4) break; ?>
					<?
						// Определяем превью

						$extensions = ['jpg','jpeg','png','gif'];

						$im = '/assets/img/prod-md.jpg';

						$prodIms = glob("./assets/products/".$prod['id']."/*");
						if(count($prodIms)){
							foreach($prodIms as $pim){
								$fArr = pathinfo($pim);
								if($fArr['filename'] == 'main' && in_array($fArr['extension'], $extensions)){
									$im = '/assets/products/'.$prod['id'].'/'.$fArr['basename'];
									break;
								} else if(in_array($fArr['extension'], $extensions)) {
									$im = '/assets/products/'.$prod['id'].'/'.$fArr['basename'];
								}
							}
						}
					?>
						<a href="/<?=$lang?>/product/<?=$prod['alias']?>/">
							<div class="im"><img src="<?=$im?>"></div>
							<b><?=$prod['name_'.$lang]?></b>
							<div class="price"><?=price_grn($prod['price'], $s['kurs'])?> грн.</div>
						</a>
					<? $i++; endforeach; ?>
					<a href="/<?=$lang?>/catalog/<?=$category['alias']?>/" id="more-analog"> <?=($lang == 'ru' ? 'Больше аналогов' : 'Більше аналогів')?> </a>
				</div>
				<? endif; ?>

				<div id="shipping">
					<div class="ship-row">
						<b class="ship-row-title">
							<i class="trucksvg"></i> Доставка
						</b>

						<p class="ship-row-text">
							<?=$s['text_del_'.$lang]?>
						</p>
					</div>

					<div class="ship-row">
						<b class="ship-row-title">
							<i class="paysvg"></i> Оплата
						</b>

						<p class="ship-row-text">
							<?=$s['text_pay_'.$lang]?>
						</p>
					</div>

					<div class="ship-row">
						<b class="ship-row-title">
							<i class="returnsvg"></i> <?=($lang == 'ru' ? 'Обмен/возврат' : 'Обмін/повернення')?>
						</b>

						<p class="ship-row-text">
							<?=$s['text_return_'.$lang]?>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div id="pr-tabs-wrap">
			<div id="pr-tabs">
				<a href="#" class="act" data-tab="pr-tab-desc"><?=($lang == 'ru' ? 'Описание' : 'Опис')?></a>
				<a href="#" data-tab="pr-tab-char">Характеристики</a>
				<a href="#" data-tab="pr-tab-revs"><?=($lang == 'ru' ? 'Отзывы' : 'Відгуки')?></a>
			</div>
		</div>

		<div id="pr-tab-wrap">
			<div id="pr-tab">
				<div class="pr-tab pr-tab-desc" data-tab="pr-tab-desc">
					<div>
						<?=$product['text_'.$lang]?>
					</div>
				</div>

				<div class="pr-tab pr-tab-char" data-tab="pr-tab-char">
					<div id="pr-char-cont">
						<?=$product['char_'.$lang]?>
					</div>
				</div>

				<div class="pr-tab pr-tab-revs" data-tab="pr-tab-revs">
					<div>
						<h2><?=($lang == 'ru' ? 'Отзывы о ' : 'Відгуки про ')?> <?=$product['brand']?> <?=$product['mpn']?></h2>

						<div id="comment-form">
							<div class="comment-form-row">
								<div id="grev">
									<div class="starsadd">
										<i data-value="1" class="starsvg act"></i>	
										<i data-value="2" class="starsvg act"></i>	
										<i data-value="3" class="starsvg act"></i>	
										<i data-value="4" class="starsvg act"></i>	
										<i data-value="5" class="starsvg act"></i>
									</div>
								</div>
								<input type="hidden" name="value" id="comment-rate" value="5">
								<input type="hidden" name="value" id="prid" value="<?=$product['id']?>">
							</div>
							<div class="comment-form-row">
								<input type="text" name="name" id="comment-name" placeholder="<?=($lang == 'ru' ? 'Имя' : 'Ім\'я')?>">
								<input type="text" name="email" id="comment-email" placeholder="<?=($lang == 'ru' ? 'Email' : 'Email')?>">
							</div>
							<div class="comment-form-row">
								<textarea name="comment" id="comment-comment" placeholder="<?=($lang == 'ru' ? 'Комментарий' : 'Коментар')?>"></textarea>
							</div>
							<div class="comment-form-row">
								<a href="#" id="add-comment"><?=($lang == 'ru' ? 'Добавить отзыв' : 'Додати відгук')?></a>
							</div>
						</div>

						<? if(count($comments)): ?>
						<div id="comment-list">
							<? foreach($comments as $comment): ?>
							<div class="c-item">
								<div class="c-head">
									<b><?=$comment['name']?></b>
									
									<? if($comment['value']): ?>
									<div class="stars" data-value="5">
										<i data-value="1" class="starsvg <?=($comment['value'] >= 1 ? 'act' : '')?>"></i>	
										<i data-value="2" class="starsvg <?=($comment['value'] >= 2 ? 'act' : '')?>"></i>	
										<i data-value="3" class="starsvg <?=($comment['value'] >= 3 ? 'act' : '')?>"></i>	
										<i data-value="4" class="starsvg <?=($comment['value'] >= 4 ? 'act' : '')?>"></i>	
										<i data-value="5" class="starsvg <?=($comment['value'] >= 5 ? 'act' : '')?>"></i>
									</div>
									<? endif; ?>

									<time><?=date('d.m.Y '.($lang == 'ru' ? 'в' : 'о').' H:i', $comment['ts'])?></time>
								</div>
								
								<div class="c-text">
									<?=$comment['comment']?>
								</div>
							</div>
							<? endforeach; ?>
						</div>
						<? endif; ?>
					</div>
					
				</div>
			</div>
		</div>
		
		<? if(count($analogs)): ?>
		<div id="similars">
			<h2>
				<?=($lang == 'ru' ? 'Похожие товары' : 'Схожі товари')?>
				
				<span class="prodslider-nav" id="similarslider-nav">
					<a href="#" data-slide="prev" class="similarslider-nav-left"><i class="sllarrsvg"></i></a>
					<a href="#" data-slide="next" class="similarslider-nav-right"><i class="slrarrsvg"></i></a>
				</span>	
			</h2>

			<div class="prodslider">
				<div class="swiper-container" id="similarslider">
				<div class="swiper-wrapper">

				<? $this->load->view('desktop/v_product_list', ['prod_list'=>$analogs, 'prod_list_slider'=>true]); ?>

				</div>
				</div>
			</div>
		</div>
		<? endif; ?>

		<? $this->load->view('desktop/blocks/v_watched'); ?>

	</section>

	</main>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>