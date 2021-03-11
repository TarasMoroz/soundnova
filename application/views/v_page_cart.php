
<style>
#cart {width:840px; margin:50px auto;}
#cart h1 {text-align: center; font-size:35px; color:#000; font-family: Gilroy-Bold; text-align: center;}
.cit { height:250px; position: relative; border-bottom:1px solid #666; width:100%; }
.cit .inf, .cit .im, .cit .gquant {height:200px; display: inline-block; margin:25px 0; float:left;}
.cit .inf { width:60%; }
.cit .inf b{color:#000;font-size:20px;display:block;font-family:Gilroy-Bold;height:50px;line-height:50px; }
.cit .inf b.price{ font-size:30px;  }
.cit .im {width:20%;}
.cit .im img {height:200px; margin:0 auto;}
.cit .gquant {width:10%; height:100px; margin:50px 0; position: relative;}
.cit .gquant::before {
	position:absolute;
	display: block;
	width:20px;
	height:20px;
	line-height: 20px;
	text-align: center;
	top:65px;
	left:-35px;
	content:"x";
	font-size:20px;
	color:#999;
}
.cit .cgq { display: block; cursor: pointer; margin:0 auto; width:50px; height:50px; line-height: 50px; text-align:center; }
.cit .cgq i svg { width:27px; height:22px; margin:9px 6.5px; }
.cit .q-min i svg {transform: rotate(180deg);}
.cit .cgquant { width:50px; font-size:30px; font-family:Gilroy-Bold; margin:0 auto; height:50px; line-height: 50px; text-align:center; color:#000; }

.cit .del {display: block; width:30px; height:30px; position: absolute; top:20px; right:20px;}
.cit .del svg { width:20px; height:20px; margin:5px;transition: 0.3s;}
.cit .del:hover svg{transform:rotate(180deg);transition: 0.3s;}

#summ { width:100%; height:250px; margin:50px 0; }
#summ #prcd { height:100px; line-height: 100px; width:200px; float:left; }
#summ #prcd input { height:30px; float:left; width:100%; border:0; border-bottom:1px solid #666; padding:5px 5px; color:#333; font-size:20px; }
#summ #prcd.red input{color:#E93C3C;font-family: Gilroy-Bold;}
#summ #prcd.grn input{color:#5EEA7C;font-family: Gilroy-Bold;}
#summ #prcd #prcdmsg { display:block;font-size: 16px; color:#666; height:30px; line-height: 30px; text-align: left;}

#forpay { height:100px; width:200px; float:right; }
#forpay b{ font-size:22px; color:#000; height:30px; line-height: 30px; }
#forpay #sum { height:50px; margin-top: 20px; text-transform: uppercase; font-family: Gilroy-Bold; color:#000; font-size:28px; position: relative; }
#forpay #sum #tot b {font-size:30px;}
#forpay #sum #disc { top:-18px; right:0px; color:#5EEA7C; font-size:20px; position: absolute; width:80px; height:30px; line-height: 30px; }

#crtcheckout { display: block; width:320px; text-align: center; background: #FFD100;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
border-radius: 15px; height:50px; line-height: 50px; text-decoration: none; text-transform: uppercase; color:#fff; margin:50px auto; font-size:20px; }

@media only screen and (max-width: 1200px) {
  #cart { width:100%; margin-bottom: 100px; }
  .cit {width:calc(100% - 30px); margin:0 auto; margin-bottom:30px; height:150px;}
  .cit .inf, .cit .im, .cit .gquant {height:120px; margin:15px 0; }
  .cit .inf { width:45%; height:120px; margin:15px 0; overflow: hidden; }
  .cit .inf b{font-size:12px; height:34px; line-height: 34px; white-space: nowrap;}
  .cit .inf b.price{font-size:16px;}
  .cit .inf b.goodt{height:auto; line-height: 14px; margin-top: 10px; white-space: normal;}
  .cit .im {width:20%; }
  .cit .im img {height:120px; margin:-10px auto;}
  .cit .gquant {width:30%; float:right; height:100px; margin:25px 0; position: relative;}
  .cit .cgq { height:34px; line-height:34px; }
  .cit .cgquant { height:33px; line-height: 33px; font-size: 20px;}
  .cit .gquant::before { left:0px; top:40px; font-size: 16px; }
  .cit .del { width:30px; height:30px; top:-12px; right:0px;}
  .cit .del svg { width:16px; height:16px; margin:7px;}

  #summ { height:100px; width:calc(100% - 30px); margin:40px auto; }
  #summ #prcd { height:80px; line-height: 80px; margin-top: 12px; width:145px; float:left; }
  #summ #prcd input {font-size: 16px;}
  #summ #prcd #prcdmsg { font-size: 12px; }

  #forpay { height:100px; width:120px; float:right; text-align: right; }
  #forpay b{ font-size:14px;}
  #forpay #sum { font-size: 20px; margin-top: 0; }
  #forpay #sum #tot b { font-size: 20px; }
  #forpay #sum #disc { font-size: 14px; top:-15px; left:-10px; width:50px; right:none; }

  #crtcheckout { height:38px; line-height: 38px; margin:10px auto; width:220px; font-size: 14px; }
}

</style>

<div id="cart">
	<? if(isset($_COOKIE['cart'])): $cart = json_decode($_COOKIE['cart']); ?>

		<? $goods = (array) $cart->goods; ?>

		<? if(empty($goods)): ?>
			<h1>Ваш кошик порожній! <br>Додайте в нього товари...</h1>
		<? else: ?>

			<? foreach($goods as $key => $good): ?>

				<?
					$imgFiles = [];
					foreach(glob("./assets/posts/".$good->id."/*") as $file){
						if(substr($file, -4) === ".jpg"){
							$file = str_replace("\\", "/", substr($file,1));
							array_push($imgFiles,$file);
						}
					}

					ksort($imgFiles);
					$imgFiles = array_reverse($imgFiles);
					$pic = (!empty($imgFiles)) ? $imgFiles[0] : '/assets/img/prod.jpg';
				?>

				<div class="cit" id="<?=$key?>">
					<div class="inf">
						<b class="goodt"><?=$good->t?></b>
						<b><?=$good->at->t?></b>
						<b id="<?=$key?>price" class="price">
							<span><?=$good->p?></span> ГРН
						</b>
					</div>

					<div class="im">
						<img src="<?=$pic?>" alt="img">
					</div>

					<div class="gquant">
						<div class="cgq q-pls" data-cit="<?=$key?>"> <i class="arrsvg"></i> </div>
						<div class="cgquant" data-cit="<?=$key?>"> <?=$good->c?> </div>
						<div class="cgq q-min" data-cit="<?=$key?>" <? if($good->c < 2){ echo 'style="opacity:0;"';} ?>> <i class="arrsvg"></i> </div>
					</div>

					<a href="#" data-cit="<?=$key?>" class="del">
						<i class="closesvg"></i>
					</a>
				</div>
			<? endforeach; ?>

			<div id="summ">
				<div id="prcd" <? if($cart->disc > 0) echo 'class="grn"'; ?>>
					<input type="text" placeholder="промокод" value="<?=($cart->promo ? $cart->promo : '')?>">
					<span id="prcdmsg"></span>
				</div>
				<div id="forpay">
					<b>До сплати</b>
					<div id="sum">
						<div id="disc"></div>
						<div id="tot">
							<b>0</b> ГРН
						</div>
					</div>
				</div>
				<br clear="all">
				<a id="crtcheckout" href="/ua/checkout">ОФОРМИТИ ЗАМОВЛЕННЯ</a>
			</div>

		<? endif; ?>

	<? endif; ?>
</div>