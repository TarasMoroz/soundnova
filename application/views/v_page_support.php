
<div id="support">
	<h1><?=$data['flexdata']->h1?></h1>
	
	<div id="plans">
		<div class="head head3"><?=$data['flexdata']->plan3?></div>
		<div class="head head2"><?=$data['flexdata']->plan2?></div>
		<div class="head head1"><?=$data['flexdata']->plan1?></div>

		<br clear="all">
		<? for ($i=1; $i <= 20; $i++): ?>
		<div class="line"> 
			<span><?=$data['flexdata']->{'line'.$i}?></span> 
			<div class="check"> 
				<? if(!in_array($i, [12,13])): ?>
				<i class="checksvg"></i>
				<? endif; ?>
			</div>

			<div class="check">
				<? if(!in_array($i, [11,12,14,15])): ?>
				<i class="checksvg"></i>
				<? endif; ?>
			</div>

			<div class="check">
				<? if(!in_array($i, [6,7,10,11,13,14,15,17])): ?>
				<i class="checksvg"></i>
				<? endif; ?>
			</div> 
		</div>
		<? endfor; ?>

		<br clear="all">

		<div class="foot">
			<a href="#" data-type="fran"><?=$data['flexdata']->detail?></a>
			<a href="#" data-type="supp"><?=$data['flexdata']->detail?></a>
			<a href="#" data-type="prem"><?=$data['flexdata']->detail?></a>
		</div>
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
		<button><?=$data['flexdata']->button?></button>
		</b>
		<div class="err"><?=$data['flexdata']->err?></div>
	</div>
	</form>
</div>

<div id="pop-support" class="bg-popup">
	<div class="popup popup-support">
		<div class="close-popup">
			<i class="closesvg"></i>
		</div>

		<div class="icon-popup">
			<i id="supportsvg"></i>
		</div>


		<b class="inf">Для замовлення дзвінка та отримання більш детальної інформації заповніть форму нижче.</b>

		<form id="form-support" action="/send/support">
			<b><?=$data['flexdata']->name?></b>
			<input type="text" name="name" value="">
			<b><?=$data['flexdata']->phone?></b>
			<input type="text" name="phone" placeholder="+380" value="+380">
			<b><?=$data['flexdata']->interest?></b>
			
			<div class="chck"><input type="checkbox" id="fran" name="fran">
			<span>&nbsp; <?=$data['flexdata']->plan3?></span> </div>
			
			<div class="chck"><input type="checkbox" id="supp" name="supp">
			<span>&nbsp; <?=$data['flexdata']->plan2?></span> </div>
			
			<div class="chck"><input type="checkbox" id="prem" name="prem">
			<span>&nbsp; <?=$data['flexdata']->plan1?></span> </div>

			<br><br>

			<button><?=$data['flexdata']->buttonsend?></button>
			<div class="err"><?=$data['flexdata']->err?></div>
		</form>
	</div>
</div>