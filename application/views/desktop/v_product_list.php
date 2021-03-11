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

		<a class="prd-hd" href="/product/<?=$prod['alias']?>" style="background-image: url(<?=($prod['pv_des_img_bg_preview']||$prod['pv_bund_img_bg_preview']?('/assets/media/product_variant-img_bg_preview/'.($prod['pv_des_img_bg_preview']?$prod['pv_des_img_bg_preview']:$prod['pv_bund_img_bg_preview'])):'/assets/img/bestsellerbg.jpg')?>);">

			<img src="<?=$im?>" alt="default box">
			<span class="prd-tit"><?=$prod['name']?> | <?=$prod['cnt_elements']?> elements</span>
			<!-- <span class="prd-tit-blue">Impacts Sound Effects</span> -->
		</a>

		<div class="prd-sndcld">
			<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?=$prod['soundcloud']?>&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
		</div>

		<div class="prd-ft">
			<div class="prd-ft-lt">
				<div class="prd-price">from <b>$<?=($prod['pv_des_price']?$prod['pv_des_price']:$prod['pv_bund_price'])?></b></div>
				<div class="prd-stars">
					<div class="stars"></div>
					<span class="prd-stars-cnt"><?=$prod['cnt_reviews']?></span>
				</div>
				<div class="prd-seles"><?=$prod['cnt_sales_public']?> Sales</div>
			</div>

			<div class="prd-ft-rt">
				<button class="btn-purp-grad prd-buy act-buy">ADD TO CART</button>
				<a href="#" class="prd-more">More details about <?=($prod['pv_des_price']?'pack':'bundle')?></a>
			</div>
		</div>

		<? $prdsObj = ['id'=>$prod['id'], 'c'=>1, 't'=>$prod['name'], 'im' => $im, 'a'=>$prod['alias'], 'p'=> price_grn(($prod['pv_des_price']?$prod['pv_des_price']:$prod['pv_bund_price']), 28.2)]; ?>
		<script>prds["<?=$prod['id']?>"] = <?=json_encode($prdsObj)?>;</script>
	</div>

<? if($prod_list_slider === true): ?></div><? endif; ?>

<? endforeach; ?>