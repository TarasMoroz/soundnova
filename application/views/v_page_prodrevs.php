<?
	$imgFiles = [];
	$dir = ($lang == 'ua') ? $page['id'] : substr($page['id'], 0, -3);
	foreach(glob("./assets/posts/".$dir."/*") as $file){
		if(substr($file, -4) === ".jpg"){
			$file = str_replace("\\", "/", substr($file,1));
			array_push($imgFiles,$file);
		}
	}

	ksort($imgFiles);
	$imgFiles = array_reverse($imgFiles);
	$pic = (!empty($imgFiles)) ? $imgFiles[0] : '/assets/img/prod.jpg';

	$avgRate = 0;
	if(count($revs) > 1){
		foreach($revs as $rev){ 
			if($rev->value > 0) $avgRate = ($avgRate+$rev->value)/2;
		}
	}else{
		if(!empty($revs)) $avgRate = $revs[0]->value;
	}

	$avgRate = round($avgRate, 0, PHP_ROUND_HALF_UP);
?>

<style>
	#prodrev { width:940px; margin:50px auto; }
	#prodrev h1 { font-size:35px; }
	#prodrev .grev .stars { float: left; }
	#prevl { width:300px; float:left; height:auto; margin-bottom: 100px; }
	#prevl img {width:250px; display: block; margin:0 auto;}
	#prevl #togood { display: block; width:250px; text-align: center; background: #FFD100;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
border-radius: 15px; height:50px; line-height: 50px; text-decoration: none; text-transform: uppercase; color:#fff; margin:0 auto; font-size:20px; }
	#prevr {width:calc(100% - 350px); float:right; margin-bottom: 100px;}

	.rev { margin-bottom:50px; }
	.rev .h {height:34px; line-height: 34px; margin-bottom: 10px;}
	.rev .h b {font-size:22px; height:34px; line-height: 34px; max-width:300px; overflow: hidden; white-space: nowrap; display: inline-block; float:left; color:#000; font-family: Gilroy-Bold; font-weight: bold;}
	.rev .h .stars { height:30px; margin:2px 0px 2px 20px; position: relative; display: inline-block; }
	.rev .h .stars i { width:20px; height:26px; margin:2px 0; display: block; float:left; cursor: pointer;}
	.rev .h .stars i svg{ width:20px; height:20px; margin:3px 0px; fill:none; stroke:#676d76; stroke-width:.7; }
	.rev .h .stars i.act svg{ fill:#FFD100; stroke:#FFD100;}
	.rev .h .d { font-size:16px; color:#666; display: inline-block; height:34px; line-height: 34px; float:right; }
	.rev .txt { font-size:20px; color:#000; }

	@media only screen and (max-width: 1200px) {
		#prodrev { width:calc(100% - 30px); margin:0 auto; }
		#prodrev h1 { font-size:20px; font-family: 'Gilroy-Bold'; display: block; width:100%; text-align: center; margin-bottom: 10px; }
		#prodrev .grev .stars { float: none; margin:0 auto; margin-left:calc(50% - 90px); }
		#prevl { width:300px; margin:0 auto; float:none;}
		#prevl img {width:170px;}
		#prevl #togood { width:220px; height:38px; line-height: 38px; font-size: 14px; }
		#prevr {width:calc(100% - 30px); margin:50px auto; margin-bottom: 100px; float:none; }

		.rev {margin-bottom:20px;}
		.rev .h {margin-bottom: 0;}
		.rev .h b {font-size:12px; max-width:120px; overflow: hidden; white-space: nowrap; }
		.rev .h .d { font-size:12px; }
		.rev .h .stars { height:20px; margin:3px 0px 7px 10px;}
		.rev .h .stars i { width:18px; height:20px; cursor:pointer;}
		.rev .h .stars i svg{ width:18px; height:18px; margin:1px 0; }
		.rev .txt { font-size:14px; line-height: 16px; }
	}
</style>

<div id="prodrev">
	<h1> <?=$page['title']?> </h1>
	
	<div class="grev">
		<div class="stars" data-value="<?=$avgRate?>">
			<i data-value="1" class="starsvg <? if(1 <= $avgRate) echo 'act'; ?>"></i>	
			<i data-value="2" class="starsvg <? if(2 <= $avgRate) echo 'act'; ?>"></i>	
			<i data-value="3" class="starsvg <? if(3 <= $avgRate) echo 'act'; ?>"></i>	
			<i data-value="4" class="starsvg <? if(4 <= $avgRate) echo 'act'; ?>"></i>	
			<i data-value="5" class="starsvg <? if(5 <= $avgRate) echo 'act'; ?>"></i>
			<span>(<?=count($revs)?>)</span>
		</div>
	</div>

	<br clear="all">

	<div id="prevl">
		<img src="<?=$pic?>" alt="<?=$page['title']?>">
		<a href="/<?=$lang?>/<?=$page['id']?>/" id="togood">Перейти до товару</a>
	</div>

	<div id="prevr">
		<? foreach($revs as $rev): ?>
		<div class="rev">
			<div class="h">
				<b><?=$rev->name?></b>
				<div class="stars" data-value="<?=$rev->value?>">
					<i data-value="1" class="starsvg <? if(1 <= $rev->value) echo 'act'; ?>"></i>	
					<i data-value="2" class="starsvg <? if(2 <= $rev->value) echo 'act'; ?>"></i>	
					<i data-value="3" class="starsvg <? if(3 <= $rev->value) echo 'act'; ?>"></i>	
					<i data-value="4" class="starsvg <? if(4 <= $rev->value) echo 'act'; ?>"></i>	
					<i data-value="5" class="starsvg <? if(5 <= $rev->value) echo 'act'; ?>"></i>
				</div>
				<div class="d"><?=date('d.m.Y', $rev->ts)?></div>
			</div>
			<div class="txt">
				<?=$rev->review?>
			</div>
		</div>
		<? endforeach; ?>
	</div>
</div>