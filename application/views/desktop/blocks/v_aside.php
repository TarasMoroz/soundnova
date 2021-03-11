<aside id="side" <? if($params['fix'] === true): ?>class="fix"<? endif; ?>>
	
	<a href="#" id="side-close">
		<i class="closesvg"></i>
	</a>

	<div id="logo">
		<a href="/<?=$lang?>/">
			<img class="logo" src="/assets/img/logo.png" alt="logo"/>
		</a>
	</div>

	<div id="lng-switch">
		
	</div>

	<div id="catalog" <? if($params['foldup_categories'] === true): ?>class="foldup folding"<? endif; ?>>
		<div id="cat-title"> 
			<a href="/<?=$lang?>/catalog/"><?=($lang == 'ru'?'Каталог товаров':'Каталог товарів')?> </a>
			<i class="darrsvg"></i>
		</div>
		<ul>
			<? foreach($cats as $cat): ?>
			<li>
				<a href="/<?=$lang?>/catalog/<?=$cat['alias']?>/" <? if($params['filtersData']['category']['alias'] === $cat['alias']): ?>class="act"<? endif; ?>>
					<?=$cat['name_'.$lang]?>
				</a>
			</li>
			<? endforeach; ?>
		</ul>
	</div>
	
	<? if(isset($params['filtersData'])): // выводим доступные фильтры в каталоге ?>

	<? $data = $params['filtersData']; ?>
	
	<div id="ftrs">
		<div id="ftr-inf" style="display: none;">
			Подобрано 182 из 4332 

			<a id="ftr-apply" href="#">Показать</a>
		</div>	
		
		<? if(!empty($data['aFilters']) || $data['query']['pfrom'] || $data['query']['pto']): ?>
		<div id="cat-sel-ftr">

			<!-- <div class="sel-ftr">
				<div class="sel-ftr-title">На аккумаляторе</div> 
				<a href="#" class="close">
					<i class="closesvg"></i>
				</a>
			</div> -->
			
			<?
				$clearQ = changeQueryVal(['pfrom'=>null, 'pto' => null, 'page' => null], $data['query']);
				$clearAllLink = '/'.$lang.'/catalog/'.($data['category'] ? $data['category']['alias'].'/' : '').($clearQ ? '?' : '').$clearQ;
			?>

			<a href="<?=$clearAllLink?>" class="sel-ftr" id="clear-ftrs">
				<div class="sel-ftr-title"><?=($lang == 'ru' ? 'Отменить все фильтры' : 'Відмінити всі фільтри')?></div> 
			</a>
		</div>
		<? endif; ?>

		<div class="cat-ftr">
			<div class="cat-ftr-title">
				<?=($lang == 'ru' ? 'Цена' : 'Ціна')?>, грн <i class="darrsvg"></i>
			</div>

			<div id="price-range">
				<script type="text/javascript">
					<? 
						$pmin = price_grn($data['pMinMax']['min'], $s['kurs']); 
						$pmax = price_grn($data['pMinMax']['max'], $s['kurs']); 
						$pf = ($data['query']['pfrom']) ? $data['query']['pfrom'] : $pmin;
						$pt = ($data['query']['pto']) ? $data['query']['pto'] : $pmax;
						$pQ = changeQueryVal(['page' => null,'pfrom' => null, 'pto' => null], $data['query']);
					?>
					var prangeFrom = <?=$pmin?>;
					var prangeTo = <?=$pmax?>;
					var pFrom = <?=$pf?>;
					var pTo = <?=$pt?>;
					var pQ = '<?=$pQ?>';
				</script>
				<div id="price-range-form">
					<span><?=($lang == 'ru' ? 'от' : 'від')?></span>
					<input type="text" name="price-from" id="price-from" value="<?=$pf?>">
					<span><?=($lang == 'ru' ? 'до' : 'до')?></span>
					<input type="text" name="price-to" id="price-to" value="<?=$pt?>">
					<a href="#" id="price-range-apply">ОК</a>
				</div>

				<div id="price-range-slider">
					
				</div>
			</div>
		</div>

		<? $ftrQ = changeQueryVal(['page' => null], $data['query']); ?>

		<? //foreach($availableFilters as $group => $filter): ?>
		<? $prevGrp = 0; $i=0; $existFtrs = $data['ftrs']; $ftrs = $data['validFtrs']; foreach($ftrs as $falias => $filter): ?>

		<? if($filter['g_id'] != $prevGrp && $i != 0): // закрываем предыдущий блок фильтров ?>
		</div>
		<? endif; ?>

		<? if($filter['g_id'] != $prevGrp && $i != 0 || $i==0): ?>
		<div class="cat-ftr">
			<div class="cat-ftr-title">
				<?=$filter['g_name_'.$lang]?> <i class="darrsvg"></i>
			</div>
		<? endif; ?>

		<? //foreach($filter as $alias => $info): ?>
		<?php

		    $aliasFilters = $data['aFilters'];
		    $aliasKey = array_search($filter['alias'],$aliasFilters);
		    if($aliasKey !== FALSE){ // текущий пробуем удалить...
		      unset($aliasFilters[$aliasKey]);
		    } else { // если нет в массиве алиасов, то добавляем текущий фильтр туда
		      $aliasFilters = (!empty($data['aFilters'])) ? array_merge($data['aFilters'], [$filter['alias']]) : [$filter['alias']];
		    }
		    //echo print_r($aliasFilters);
		    // берем новые данные из массива доступных фильтров!
		    $newFilterSet = array_map(function($x) use ($ftrs) { $ftrs[$x]['key'] = $x; return $ftrs[$x]; }, $aliasFilters);
		    usort($newFilterSet, function($a, $b) { return $a['id'] - $b['id']; });
		    $newAliasFilters = array_column($newFilterSet, 'alias');
		    $newAlias = implode('-', $newAliasFilters);
		  //}
		?>
		
		<? if(isset($existFtrs[$falias])): ?>
		<a href="/<?=$lang?>/catalog/<?=($data['category'] ? $data['category']['alias'].'/' : '')?><?=($newAlias != '' ? 'filter/'.$newAlias.'/' : '')?><?=($ftrQ ? '?' : '').$ftrQ?>" class="cat-ftr-it">
			<div class="cat-ftr-it-radio <? if(in_array($falias, $data['aFilters'])): ?>cat-ftr-it-radio-act<? endif; ?>"> <i class="checksvg"></i> </div> 
			<div class="cat-ftr-it-name"><?=$filter['name_'.$lang]?></div>
			<? if(!in_array($falias, $data['aFilters'])): ?><div class="cat-ftr-it-cnt"><?=$existFtrs[$falias]['cnt']?></div><? endif; ?>
		</a>
		<? else: ?>
		<div class="cat-ftr-it" style="opacity: 0.5;">
			<div class="cat-ftr-it-radio"> <i class="checksvg"></i> </div> 
			<div class="cat-ftr-it-name"><?=$filter['name_'.$lang]?></div>
			<div class="cat-ftr-it-cnt"><?=$filter['cnt']?></div>
		</div>
		<? endif; ?>

		<? if($i == (count($ftrs)-1)): // закрываем последний замыкающий блок ?>
		</div>
		<? endif; ?>

		<? $i++; $prevGrp = $filter['g_id']; endforeach; ?>

	</div>

	<? endif; ?>
	
	<? if(!isset($params['filtersData'])): // в каталоге не выводим ?>
	
	<div id="side-links">
		
	</div>

	<div id="adress">
		<a href="<?=$s['gmaps_link1']?>" target="_blank" class="aside-addr aside-addr-point"><i class="pointersvg"></i> <?=$s['adress1']?></a>
		<a href="<?=$s['phone1']?>" class="aside-addr aside-addr-phone"><i class="phonesvg"></i> <?=$s['phone_formatted1']?></a>
		
		<? if($s['phone1_1']): ?>
		<a href="<?=$s['phone1_1']?>" class="aside-addr aside-addr-phone"><i class="phonesvg"></i> <?=$s['phone_formatted1_1']?></a>
		<? endif; ?>

		<br>

		<a href="<?=$s['gmaps_link2']?>" target="_blank" class="aside-addr aside-addr-point"><i class="pointersvg"></i> <?=$s['adress2']?></a>
		<a href="<?=$s['phone2']?>" class="aside-addr aside-addr-phone"><i class="phonesvg"></i> <?=$s['phone_formatted2']?></a>
		
		<? if($s['phone2_1']): ?>
		<a href="<?=$s['phone2_1']?>" class="aside-addr aside-addr-phone"><i class="phonesvg"></i> <?=$s['phone_formatted2_1']?></a>
		<? endif; ?>

		<br>

		<a href="mailto:<?=$s['public_email']?>" class="aside-addr aside-addr-email"><i class="mailsvg"></i> <?=$s['public_email']?></a>

		<span class="aside-soc">
			<a href="<?=$s['fb']?>" class="aside-soc-lnk" target="_blank"> <i class="fbsvg"></i> </a>
			<a href="<?=$s['inst']?>" class="aside-soc-lnk" target="_blank"> <i class="instsvg"></i> </a>
		</span>
	</div>
	<? endif; ?>

	<? if(5>10): ?>
		<div id="topp" style="display: none;">
		<div id="topp-head">ТОП 5</div>
		<? for ($i=1; $i <= 5; $i++): ?>
			<a href="#">
				<div class="im"><img src="/assets/img/prod-sm.jpg"></div>
				<b>Product title <?=$i?> With very long name of product for two rows</b>
				<div class="price">12566 грн</div>
			</a>
		<? endfor; ?>
		</div>
	<? endif; ?>
</aside>