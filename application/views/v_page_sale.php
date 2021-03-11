
<div id="sale">
	<h1><?=$data['flexdata']->h1?></h1>
	
	<div id="prods">
		<div class="prod">
			<img src="/assets/img/sale/prod1.jpg" alt="prod1">
			<div class="inf">
				<h2><span><?=$data['flexdata']->prod1h2?> <div id="ic">!</div></span></h2>
				<?=$data['flexdata']->prod1?>
			</div>
			<a href="#" data-prod="prod1" class="det"> <?=$data['flexdata']->detail?> </a>
		</div>
		<br clear="all">

		<div class="prod">
			<img src="/assets/img/sale/prod2.jpg" alt="prod1">
			<div class="inf">
				<h2><?=$data['flexdata']->prod2h2?> </h2>
				<?=$data['flexdata']->prod2?>
			</div>
			<a href="#" data-prod="prod2" class="det"> <?=$data['flexdata']->detail?> </a>
		</div>
		<br clear="all">

		<? if(5 > 10): ?>
		<div class="prod">
			<img src="/assets/img/sale/prod3.jpg" alt="prod1">
			<div class="inf">
				<h2><?=$data['flexdata']->prod3h2?></h2>
				<?=$data['flexdata']->prod3?>
			</div>
			<a href="#" data-prod="prod3" class="det"> <?=$data['flexdata']->detail?> </a>
		</div>
		<br clear="all">
		<? endif; ?>

		<div class="prod">
			<img src="/assets/img/sale/prod4.jpg" alt="prod1">
			<div class="inf">
				<h2><?=$data['flexdata']->prod4h2?></h2>
				<?=$data['flexdata']->prod4?>
			</div>
			<a href="#" data-prod="prod4" class="det"> <?=$data['flexdata']->detail?> </a>
		</div>
		<br clear="all">

		<div class="prod">
			
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<? foreach($data['slides'] as $slide): ?>
					<div class="swiper-slide">
						<img src="/assets/slides/<?=$slide->image?>" alt="prod5">
						<span><?=$slide->title?></span>
					</div>
					<? endforeach; ?>
				</div>
				
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-pagination"></div>
			</div>
			
			<div class="inf">
				<h2><?=$data['flexdata']->prod5h2?></h2>
				<?=$data['flexdata']->prod5?>
			</div>
			<a href="#" data-prod="prod5" class="det"> <?=$data['flexdata']->detail?> </a>
		</div>
		<br clear="all">

		<div class="prod">
			<img src="/assets/img/sale/prod6.jpg" alt="prod1">
			<div class="inf">
				<h2><?=$data['flexdata']->prod6h2?></h2>
				<?=$data['flexdata']->prod6?>
			</div>
			<a href="#" data-prod="prod6" class="det"> <?=$data['flexdata']->detail?> </a>
		</div>
		<br clear="all">

		<div class="prod">
			<img src="/assets/img/sale/prod7.jpg" alt="prod1">
			<div class="inf">
				<h2><?=$data['flexdata']->prod7h2?></h2>
				<?=$data['flexdata']->prod7?>
			</div>
			<a href="#" data-prod="prod7" class="det"> <?=$data['flexdata']->detail?> </a>
		</div>
		<br clear="all">
	</div>

	<br clear="all">

	<p class="ctxt"><?=$data['flexdata']->p8?></p>
	
	<form id="form-consult" action="/send/consult">
	<div id="form">
		<b> <span><?=$data['flexdata']->name?></span>
		<input type="text" name="name">
		</b>

		<b> <span><?=$data['flexdata']->phone?></span>
		<input type="text" name="phone" placeholder="+380" value="+380">
		</b>
		
		<b> <span>&nbsp;</span>
		<button type="submit"><?=$data['flexdata']->button?></button>
		</b>
		<div class="err"><?=$data['flexdata']->err?></div>
	</div>
	</form>
</div>

<div id="pop-attent" class="bg-popup">
	<div class="popup popup-attent">
		<div class="close-popup">
			<i class="closesvg"></i>
		</div>

		<div class="icon-popup">
			<i id="attentsvg"></i>
		</div>

		<img src="/assets/img/sale/ref.jpg" alt="ref">

		<p><?=$data['flexdata']->prod1inf?></p>
	</div>
</div>

<div id="pop-sale" class="bg-popup">
	<div class="popup popup-sale">
		<div class="close-popup">
			<i class="closesvg"></i>
		</div>

		<div class="icon-popup">
			<i id="bagsvg"></i>
		</div>

		<b class="inf"><?=$data['flexdata']->forminf?></b>

		<form id="form-sale" action="/send/sale">
			<b><?=$data['flexdata']->name?></b>
			<input type="text" name="name" value="">
			<b><?=$data['flexdata']->phone?></b>
			<input type="text" name="phone"  placeholder="+380" value="+380">
			<b><?=$data['flexdata']->interest?></b>
			
			<? for ($i=1; $i < 8; $i++): if($i == 3) continue; ?>
				<div class="chck"><input type="checkbox" id="prod<?=$i?>" name="prod<?=$i?>">
				<span>&nbsp; <?=$data['flexdata']->{'prod'.$i.'sel'}?></span> </div>
			<? endfor; ?>

			<br><br>

			<button><?=$data['flexdata']->sendbutton?></button>
			<div class="err"><?=$data['flexdata']->err?></div>
		</form>
	</div>
</div>