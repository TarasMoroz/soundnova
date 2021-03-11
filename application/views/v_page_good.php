<? 
	$price = 0; 
	if(isset($flex->vol_1)) $price = $flex->price_1;
	if(isset($flex->vol_085)) $price = $flex->price_085;
	if(isset($flex->vol_05)) $price = $flex->price_05;
	if(isset($flex->vol_025)) $price = $flex->price_025;

	$vols = "";
	if(isset($flex->vol_1)) $vols .= "1L ";
	if(isset($flex->vol_085)) $vols .= "0,85L ";
	if(isset($flex->vol_05)) $vols .= " / 0,5L";
	if(isset($flex->vol_025)) $vols .= " / 0,25L";

	$atts = [];
	if(isset($flex->vol_1)) $atts['vol_1'] = ['a'=>'vol_1', 't'=>'1L','p'=>$flex->price_1, 's'=>$flex->vol_1];
	if(isset($flex->vol_085)) $atts['vol_085'] = ['a'=>'vol_085', 't'=>'0,85L','p'=>$flex->price_085, 's'=>$flex->vol_085];
	if(isset($flex->vol_05)) $atts['vol_05'] = ['a'=>'vol_05','t'=>'0,5L','p'=>$flex->price_05, 's'=>$flex->vol_05];
	if(isset($flex->vol_025)) $atts['vol_025'] = ['a'=>'vol_025','t'=>'0,25L','p'=>$flex->price_025, 's'=>$flex->vol_025];

	$imgFiles = [];
	$dir = ($lang == 'ua') ? $good['id'] : substr($good['id'], 0, -3);
	foreach(glob("./assets/posts/".$dir."/*") as $file){
		if(substr($file, -4) === ".jpg"){
			$file = str_replace("\\", "/", substr($file,1));
			array_push($imgFiles,$file);
		}
	}

	ksort($imgFiles);
	$imgFiles = array_reverse($imgFiles);
	$pic = (!empty($imgFiles)) ? $imgFiles[0] : '/assets/img/prod.jpg';

	$prod = [
		'id' => $good['id'],
		'atts' => $atts,
		'c' => 1,
		't' => $good['title'],
		'im' => $pic,
		'sel'=> end($atts)
	];

?>

<div id="good">

	<script>
		var prod = <?=json_encode($prod)?>;
	</script>

	<div id="im">
		<img src="<?=$pic?>" alt="<?=$good['title']?>">

		<div class="grev">
			<div class="stars">
				<i data-value="1" class="starsvg <? if(1 <= $rate) echo 'act'; ?>"></i>	
				<i data-value="2" class="starsvg <? if(2 <= $rate) echo 'act'; ?>"></i>	
				<i data-value="3" class="starsvg <? if(3 <= $rate) echo 'act'; ?>"></i>	
				<i data-value="4" class="starsvg <? if(4 <= $rate) echo 'act'; ?>"></i>	
				<i data-value="5" class="starsvg <? if(5 <= $rate) echo 'act'; ?>"></i>
				<span>(<?=$cnt_rev?>)</span>
			</div>
			<a href="/<?=$lang?>/prodrevs/<?=$good['id']?>"> Дивитись всі відгуки </a>
		</div>
	</div>

	<div id="gtr" class="nos">

		<h1><?=$good['title']?></h1>

		<div id="gvol">
			<? if(isset($flex->vol_025)): ?> <b <?=($prod['sel']['a'] == 'vol_025' ? 'class="on"' : '')?> id="vol_025">0,25L</b> / <? endif; ?> 
			<? if(isset($flex->vol_05)): ?> <b <?=($prod['sel']['a'] == 'vol_05' ? 'class="on"' : '')?> id="vol_05">0,5L</b> / <? endif; ?>
			<? if(isset($flex->vol_085)): ?> <b <?=($prod['sel']['a'] == 'vol_085' ? 'class="on"' : '')?> id="vol_085">0,85L</b> <? endif; ?> 
			<? if(isset($flex->vol_1)): ?> <b <?=($prod['sel']['a'] == 'vol_1' ? 'class="on"' : '')?> id="vol_1">1L</b> <? endif; ?> 
		</div>

		<div id="gprice"> 
			<b><?=$price?></b> ГРН 
			<div id="nis">Товар тимчасово недоступний :(</div>
		</div>

		<br clear="all">

		<div id="gquant">
			<span>Кількість</span> 
			<div class="gq q-min"> <i class="arrsvg"></i> </div>
			<div id="cgquant"> 1 </div>
			<div class="gq q-pls"> <i class="arrsvg"></i> </div>
		</div>

		<div id="gshdesc">
			<?=$flex->short_description?>

			<a href="#gchar" id="tochar"> Характеристики <i class="arrsvg"></i> </a>
		</div>

		<div id="addcart"> Додати в кошик </div>

	</div>

	<br clear="all">

	<div id="gdesc">
		<?=$flex->description?>
	</div>

	<div id="gchar">
		<div><span>Об'єм</span> <b><?=$vols?></b> </div>
		<div><span>Вид</span> <b><?=$flex->spec?></b> </div>
		<div><span>Тип</span> <b><?=$flex->type?></b> </div>
		<div><span>Смак</span> <b><?=$flex->taste?></b> </div>
		<div><span>Термін</span> <b>12 міс.</b> </div>
	</div>

	<br clear="all">

	<div class="gpp" id="gpopup">
		<a class="off" href="#">
			<i class="closesvg"></i>
		</a>
		<div class="t">Додано до кошику</div>
		<i id="checksvg"></i>
		<a id="cont" href="#"> Продовжити </a>
		<a href="/<?=$lang?>/cart/" id="tocheckout"> Оформити замовлення </a>
	</div>

	<div class="gpp" id="gnispopup">
		<a class="off" href="#">
			<i class="closesvg"></i>
		</a>
		<div class="t">Вибачте! Товар у дорозі!</div>
		<i id="trucksvg"></i>
		<a id="gniscont" href="#"> Продовжити </a>
	</div>
</div>