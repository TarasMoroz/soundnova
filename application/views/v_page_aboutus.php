
<div id="aboutus">

	<img class="map" src="/assets/img/aboutus/map.png" alt="map">

	<div class="inf">
		<div class="row">
			<i id="pointerinfosvg"></i>
			<a target="_blank" href="<?=$data['flexdata']->gmapslink?>">
			<?=$data['flexdata']->adressinfo?>
			</a>
		</div>

		<div class="row">
			<i id="envelopesvg"></i>
			<a href="<?=$data['flexdata']->maillink?>">
				<?=$data['flexdata']->mailinfo?>
			</a>
		</div>

		<div class="row">
			<i id="phoneinfosvg"></i>
			<a href="<?=$data['flexdata']->phonelink?>">
				<?=$data['flexdata']->phoneinfo?>
			</a>
		</div>
	</div>

	<div id="sl1-contacts">
		<span>Контакти</span>
		<a href="<?=$data['flexdata']->phonelink?>"> <i id="phonesvg"></i> </a>
		<a href="<?=$data['flexdata']->viberlink?>"> <i id="vibersvg"></i> </a>
		<a href="<?=$data['flexdata']->facebooklink?>"> <i id="facebooksvg"></i> </a>
		<a href="<?=$data['flexdata']->instagramlink?>"> <i id="instagramsvg"></i> </a>
		<a href="<?=$data['flexdata']->whatsuplink?>"> <i id="whatsupsvg"></i> </a>
		<a href="<?=$data['flexdata']->youtubelink?>"> <i id="youtubesvg"></i> </a>
		<a href="<?=$data['flexdata']->maillink?>"> <i id="mailsvg"></i> </a>
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