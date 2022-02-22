<? foreach($prod_list as $prod): ?>
<?
	// Определяем превью

	$extensions = ['jpg','jpeg','png','gif'];

	$im = '/assets/img/prod-md.jpg';

	// $prodIms = glob("./assets/products/".$prod['id']."/*");
	// if(count($prodIms)){
	// 	foreach($prodIms as $pim){
	// 		$fArr = pathinfo($pim);
	// 		if($fArr['filename'] == 'main' && in_array($fArr['extension'], $extensions)){
	// 			$im = '/assets/products/'.$prod['id'].'/'.$fArr['basename'];
	// 			break;
	// 		} else if(in_array($fArr['extension'], $extensions)) {
	// 			$im = '/assets/products/'.$prod['id'].'/'.$fArr['basename'];
	// 		}
	// 	}
	// }
?>

<? if($prod_list_slider === true): ?><div class="swiper-slide"><? endif; ?>



	<? 
		$im = ($prod['pv_des_img_box'] || $prod['pv_bund_img_box']) ? 
				('/assets/media/product_variant-img_box/'.($prod['pv_des_img_box'] ? $prod['pv_des_img_box'] : $prod['pv_bund_img_box'])) : 
				'/assets/img/best1pack.png'; 
	?>


	<div class="prd" <? if(isset($favorite_list)): ?>id="prd<?=$prod['id']?>"<? endif; ?>>

		<? if(isset($favorite_list)): ?>
			<a href="#" data-id="<?=$prod['id']?>" class="prd-fav-remove">
				<i class="closesvg"></i>
			</a>
		<? endif; ?>

		<? if($prod['l_name']): ?>
			<div class="prd-label label-best" style="color: <?=$prod['l_color']?>;"><?=$prod['l_name']?></div>
		<? endif; ?>

		<a class="prd-hd" href="/product/<?=$prod['alias']?>">
		<div class="inner" style="background-image: url(<?=($prod['pv_des_img_bg_preview']||$prod['pv_bund_img_bg_preview']?('/assets/media/product_variant-img_bg_preview/'.($prod['pv_des_img_bg_preview']?$prod['pv_des_img_bg_preview']:$prod['pv_bund_img_bg_preview'])):'/assets/img/bestsellerbg.jpg')?>);"></div>
			<img src="<?=$im?>" alt="default box">
			<span class="prd-tit"><?=$prod['name']?> | <?=$prod['cnt_elements']?> elements</span>
			<!-- <span class="prd-tit-blue">Impacts Sound Effects</span> -->
		</a>

		<div class="prd-sndcld">
			<? $this->load->view('modules/player', [
				'key' => 'file_details',
				'buy_button' => false,
				'artist_name' => false,
				'track_title' => false,
				'sound' => [
					'id' => 0
				]
			]); ?>
		</div>

		<div class="prd-ft mb-1">
			<div class="prd-ft-lt">
				<small>from</small>
				<div class="prd-price">$<?=($prod['pv_des_price']?$prod['pv_des_price']:$prod['pv_bund_price'])?> <small class="txt-line-through">$550</small></div>
				<!-- <div class="prd-seles"><?=$prod['cnt_sales_public']?> Sales</div> -->
			</div>

			<div class="prd-ft-rt">
				<button class="btn-purp-grad prd-buy act-buy" 
					data-p='{"id_product": "<?php echo $prod['id']; ?>", "id_variant": "<?php echo $prod['pv_id']; ?>" }'>
					ADD TO CART
				</button>
			</div>
		</div>

		<div class="prd-ft">
			<div class="prd-ft-lt">
				<?php if($prod['cnt_reviews']): ?>
				<div class="prd-stars">
					<div class="stars"></div>
					<span class="prd-stars-cnt"><?=$prod['cnt_reviews']?></span>
				</div>
				<?php else: ?>
				<div class="prd-stars">
					<span class="prd-stars-cnt">No reviews</span>
				</div>
				<?php endif; ?>
			</div>
			<div class="prd-ft-rt">
				<a href="/product/<?=$prod['alias']?>" class="prd-more">More details about <?=($prod['pv_des_price']?'pack':'bundle')?></a>
			</div>
		</div>

		<?php 

			$prdsObj = [
				'id' => $prod['id'], 
				'v' => ($prod['pv_des_price']?'des':'bund'),
				'c'=> 1, 
				't'=> $prod['name'], 
				'im' => $im, 
				'a'=> $prod['alias'], 
				'p'=> ($prod['pv_des_price']?$prod['pv_des_price']:$prod['pv_bund_price'])
			]; 

		?>

		<script>prds["<?=$prod['id']?>"] = <?=json_encode($prdsObj)?>;</script>
	</div>

<? if($prod_list_slider === true): ?></div><? endif; ?>

<? endforeach; ?>