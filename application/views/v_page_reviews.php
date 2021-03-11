
<style>
	#revs { width:940px; margin:50px auto;  }
	.revb { width:100%; margin-bottom:50px; }
	.revb .rbl { width:250px; float:left; margin-bottom: 100px; }
	.revb .rbl img { display: block; width:220px; margin:0 auto; }
	.revb .rbl .addrev { display: block; width:220px; text-align: center; background: #FFD100;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
border-radius: 15px; height:50px; line-height: 50px; text-decoration: none; text-transform: uppercase; color:#fff; margin:0 auto; font-size:20px;  }
	.revb .rbr { width:calc(100% - 280px); margin-bottom: 100px; float:right; }

	.rbr h2 {font-size:25px; margin-left: 25px; font-family: Gilroy-Bold; margin-bottom: 10px; color:#000;}
	.rbr .grev { float:left; margin-bottom:20px; margin-left: 25px; }
	.rbr .revprev { background: #FFFFFF; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.08); border-radius: 30px; padding:25px; }
	.rbr .revprev .rev {}
	.rbr .revprev .prodrevs { display: block; height:30px; line-height: 30px; text-align: center; position: relative; font-size:16px; color:#666; text-decoration: none; margin-bottom: 20px; }
	.rbr .revprev .prodrevs i {display: block; margin:0 auto; width:24px; height:24px; transform: rotate(180deg);}
	.rbr .revprev .prodrevs i svg { width:20px; height:20px; margin:2px; }

	.rev { margin-bottom:50px; }
	.rev .h {height:34px; line-height: 34px; margin-bottom: 10px;}
	.rev .h b {font-size:22px; height:34px; line-height: 34px; display: inline-block; float:left; color:#000; font-family: Gilroy-Bold; font-weight: bold;}
	.rev .h .stars { height:30px; margin:2px 0px 2px 20px; position: relative; display: inline-block; }
	.rev .h .stars i { width:20px; height:26px; margin:2px 0; display: block; float:left;}
	.rev .h .stars i svg{ width:20px; height:20px; margin:3px 0px; fill:none; stroke:#676d76; stroke-width:.7; }
	.rev .h .stars i.act svg{ fill:#FFD100; stroke:#FFD100;}
	.rev .h .d { font-size:16px; color:#666; display: inline-block; height:34px; line-height: 34px; float:right; }
	.rev .txt { font-size:20px; color:#000; }

	@media only screen and (max-width: 1200px) {
 		#revs { width:calc(100% - 30px); margin:50px auto; margin-bottom: 100px; }
 		.revb { position: relative;margin-bottom:0;}
 		.revb .rbl { width:100px; margin-bottom: 80px; }
 		.revb .rbl img { width:100%; margin-top: 70px; }
 		.revb .rbl .addrev { position: absolute; bottom:30px; right:calc(50% - 140px); height:36px; line-height: 36px; font-size: 13px; width:180px; }
 		.revb .rbr { width:calc(100% - 100px); margin-bottom: 80px; }
 		.rbr h2 {font-size:16px; margin-left: 15px; min-height: 24px; margin-top: 0px; margin-bottom: 0px;}
 		.rbr .grev {margin-bottom: 5px; margin-left: -10px; transform: scale(0.7);}
 		.rbr .revprev { border-radius: 20px; padding:10px 15px; min-height: 125px; font-size: 13px; margin-top: 5px; }
 		.rbr .revprev .prodrevs { margin-bottom: 5px; }
 		.rbr .revprev .prodrevs i { display: inline-block; transform: rotate(90deg); }
 		.rbr .revprev .prodrevs i svg { margin-left:10px; }
 		.rev { margin-bottom:10px; }
 		.rev .h {margin-bottom: 0; height:24px; line-height: 24px; }
 		.rev .h b {font-size:12px; height:24px; line-height: 24px; max-width:115px; overflow: hidden; white-space: nowrap; }
		.rev .h .d { font-size:12px; display: none; }
		.rev .h .stars { height:20px; margin:-1px 0px 0px 5px;}
		.rev .h .stars i { width:18px; height:20px; }
		.rev .h .stars i svg{ width:18px; height:18px; margin:1px 0; }
		.rev .txt { font-size:12px; line-height: 16px; }
 	}
</style>


<div id="revs">
	<? foreach($goods as $good): ?>
	<?
		$imgFiles = [];
		$dir = ($lang == 'ua') ? $good->id : substr($good->id, 0, -3);
		foreach(glob("./assets/posts/".$dir."/*") as $file){
			if(substr($file, -4) === ".jpg"){
				$file = str_replace("\\", "/", substr($file,1));
				array_push($imgFiles,$file);
			}
		}

		ksort($imgFiles);
		$imgFiles = array_reverse($imgFiles);
		$pic = (!empty($imgFiles)) ? $imgFiles[0] : '/assets/img/prod.jpg';

		$prodrevs = [];
		foreach($revs as $rev){
			if($rev->id_page == $good->id) array_push($prodrevs, $rev);
		}

		$avgRate = 0;
		if(count($prodrevs) > 1){
			foreach($prodrevs as $rev){ 
				if($rev->value > 0) $avgRate = ($avgRate+$rev->value)/2;
			}
		}else{
			if(!empty($prodrevs)) $avgRate = $prodrevs[0]->value;
		}

		$avgRate = round($avgRate, 0, PHP_ROUND_HALF_UP);
	?>
	<div class="revb">
		<div class="rbl">
			<img src="<?=$pic?>">
			<a href="/<?=$lang?>/addrev/<?=$good->id?>/" class="addrev">Залишити відгук</a>
		</div>

		<div class="rbr">
			<h2><?=$good->title?></h2>
			<div class="grev">
				<div class="stars" data-value="<?=$avgRate?>">
					<i data-value="1" class="starsvg <? if(1 <= $avgRate) echo 'act'; ?>"></i>	
					<i data-value="2" class="starsvg <? if(2 <= $avgRate) echo 'act'; ?>"></i>	
					<i data-value="3" class="starsvg <? if(3 <= $avgRate) echo 'act'; ?>"></i>	
					<i data-value="4" class="starsvg <? if(4 <= $avgRate) echo 'act'; ?>"></i>	
					<i data-value="5" class="starsvg <? if(5 <= $avgRate) echo 'act'; ?>"></i>
					<span>(<?=count($prodrevs)?>)</span>
				</div>
			</div>

			<br clear="all">

			<div class="revprev">
				<? if(count($prodrevs) > 0): $cr=0; foreach($prodrevs as $rev): if($cr > 1) continue; ?>
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
						<!-- <div class="d"><?//=date('d.m.Y', $rev->ts)?></div> -->
					</div>
					<div class="txt">
						<?=$rev->review?>
					</div>
				</div>
				<? $cr++; endforeach; endif; ?>

				<a href="/<?=$lang?>/prodrevs/<?=$good->id?>" class="prodrevs">
					Дивитись всі відгуки <i class="arrsvg"></i>
				</a>
			</div>
		</div>
		<br clear="all">
	</div>
	<br clear="all">
	<? endforeach; ?>
</div>