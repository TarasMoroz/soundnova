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
			<span class="prd-tit-blue">Impacts Sound Effects</span>
			<!-- <span class="prd-tit-blue">Impacts Sound Effects</span> -->
		</a>

		<div class="prd-sndcld">
			<iframe class="lazy-frame" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?=$prod['soundcloud']?>&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
		</div>

		<div class="prd-ft">
			<div class="prd-ft-lt">
				<div class="prd-price">from <b>$<?=($prod['pv_des_price']?$prod['pv_des_price']:$prod['pv_bund_price'])?></b></div>

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

				<div class="prd-seles"><?=$prod['cnt_sales_public']?> Sales</div>
			</div>

			<div class="prd-ft-rt">
				<button class="btn-purp-grad prd-buy act-buy" 
					data-p='{"id": "<?php echo $prod['id']; ?>", "v": "<?php echo ($prod['pv_des_price']?'des':'bund'); ?>" }'>
					ADD TO CART
				</button>
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