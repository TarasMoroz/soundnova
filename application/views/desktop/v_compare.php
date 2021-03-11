<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="compare-page">

	<main>

	<?=$v_aside?>

		<section id="cont" class="fix">

		<? $this->load->view('desktop/blocks/v_header'); ?>

		<div id="brdcrmbs">
			<a href="/<?=$lang?>/"><?=($lang == 'ru' ? 'Главная' : 'Головна')?></a> 
			<span class="sep"> / </span>
			<span class="text"><?=($lang == 'ru' ? 'Сравнения' : 'Порівняння')?></span>
		</div>

		<h1><?=($lang == 'ru' ? 'Сравнения' : 'Порівняння')?></h1>

		<div id="comp">
			<? if(!empty($compares)): ?>
			<table>
			   <thead>
		        <tr>
		          <th>
		          	<a href="#" data-mode="all" class="mode act">Все параметры</a>
		          	<br><a href="#" data-mode="diff" class="mode">Только отличия</a>
		          </th>
		          <? foreach ($compares as $comp): ?>
				  
				  <?
						// Определяем превью

						$extensions = ['jpg','jpeg','png','gif'];

						$im = '/assets/img/prod-md.jpg';

						$prodIms = glob("./assets/products/".$comp['id']."/*");
						if(count($prodIms)){
							foreach($prodIms as $pim){
								$fArr = pathinfo($pim);
								if($fArr['filename'] == 'main' && in_array($fArr['extension'], $extensions)){
									$im = '/assets/products/'.$comp['id'].'/'.$fArr['basename'];
									break;
								} else if(in_array($fArr['extension'], $extensions)) {
									$im = '/assets/products/'.$comp['id'].'/'.$fArr['basename'];
								}
							}
						}
					?>

		          <th class="comp-prd">
		          	<a href="#" data-id="<?=$comp['id']?>" class="prd-comp-remove">
						<i class="closesvg"></i>
					</a>
		          	<div class="prd-im" style="background-image:url(<?=$im?>);"></div>
					<span class="prd-name"><?=$comp['name_'.$lang]?></span>
		          	<div class="price">
						<?=price_grn($comp['price'], $s['kurs'])?> грн. 
						<? if($comp['price_old']): ?><span class="price_old"><?=price_grn($comp['price_old'], $s['kurs'])?> грн.</span> <? endif; ?>
					</div>
					<div class="prd-btns">
						<? if($comp['stock']): ?>
						<a href="#" class="prd-buy" data-id="<?=$comp['id']?>"><?=($lang == 'ru' ? 'Купить' : 'Купити')?></a>
						<? else: ?>
						<div><?=($lang == 'ru' ? 'Нет в наличии' : 'Немає в наявності')?></div>
						<? endif; ?>

						<div class="prd-btns-rght">
							<a href="#" class="prd-fav" data-id="<?=$comp['id']?>"><i class="favsvg"></i></a>
						</div>
					</div>
		          </th>
		          <? $prdsObj = ['id'=>$comp['id'], 'c'=>1, 't'=>$comp['name_'.$lang], 'im' => $im, 'a'=>$comp['alias'], 'p'=> price_grn($comp['price'], $s['kurs'])]; ?>
				  <script>prds["<?=$comp['id']?>"] = <?=json_encode($prdsObj)?>;</script>
		      	  
		      	  <? endforeach; ?>
		        </tr>
		      </thead>
		      <tbody>
		      	<script> var compTr = []; </script>
				<? foreach($groups as $group): $isDiff = false; ?>
					<tr id="gr<?=$group['id']?>">
						<td><?=$group['name_'.$lang]?></td>
						<? $prevVal = ''; foreach ($compares as $comp): ?>
						<? $pftrs = json_decode($comp['filters'], true); ?>
						<td>
							<? foreach($pftrs as $pfalias): ?>
								<? foreach($ftrs as $ftr): if($ftr['id_filter_group'] == $group['id'] && $pfalias == $ftr['alias']): ?>
									<? if($prevVal != '' && $prevVal != $pfalias && $isDiff === false) { $isDiff = true; } ?>
									<?=$ftr['name_'.$lang]?>
									<? $prevVal = $pfalias; ?>
								<? endif; endforeach; ?>
							<? endforeach; ?>
						</td>
						<? endforeach; ?>
					</tr>

					<script> compTr[<?=$group['id']?>] = <?=($isDiff ? 'true' : 'false')?>; </script>
				<? endforeach; ?>
		      </tbody>
			</table>
			<? else: ?>
				<div style="padding:10px; margin:40px 0;"><?=($lang == 'ru' ? 'Список сравнений пуст, добавьте товары к сравнению!' : 'Список порівнянь порожній, додайте в нього товари!')?></div>
			<? endif; ?>
		</div>

		<br><br>

		<? $this->load->view('desktop/blocks/v_watched'); ?>


		<? $this->load->view('desktop/blocks/v_calcbanner'); ?>

		</section>

	</main>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>
