
<style>
	#conts {width:calc(100% - 120px); margin:100px auto;}
	.conl { float:left; width:500px; margin-bottom: 50px; }
	.conl h1 {font-size:30px; font-family: Gilroy-Bold; margin-top:0px; margin-bottom: 50px;}
	.conl .crow {font-size:22px; color:#000; margin-bottom: 50px;}

	.conr {float:right; width:calc(100% - 550px); margin-bottom: 50px;}
	.conr img {width:100%; display: block;}

	.conr .soct {font-size: 22px; color:#666; margin-top:100px; text-align: center;}
	.conr .soc {margin:0 auto; display: block; float:none; width:260px;}
	.conr .soc a {width:60px; height:60px; margin:0 10px;}
	.conr .soc a svg{width:60px; height:60px;}

	#cform {position: relative;}
	#wus {position: relative; height:40px; line-height: 40px; width:300px; text-align: center; font-family:Gilroy-Bold; font-size:30px; color:#000; transform: rotate(-90deg); top:180px; left:-200px;}
	#cform input, #cform textarea { height:30px; width:540px; border:0; border-bottom:1px solid #666; padding:5px 5px; color:#333; font-size:20px; margin:5px 0 0 0; }
	#cform textarea { height:23px; transition: 0.3s; overflow: hidden; }
	#cform textarea:focus { height:100px; overflow: auto; transition: 0.3s; }
	#cform .imsg { height:30px; line-height: 30px; font-size: 16px; margin-bottom:10px; color:#E93C3C; }
	.pa-inf { color:#000 !important; }
	.pa-grn { color:#5EEA7C !important; }
	.pa-red { color:#E93C3C !important; }
	#send { display: block; width:280px; text-align: center; background: #FFD100;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
border-radius: 15px; height:50px; line-height: 50px; text-decoration: none; text-transform: uppercase; color:#fff; margin:30px auto; font-size:20px; }
	
	#cinf {margin:50px auto;}
	#cinf h2 {font-family: Gilroy-Bold; font-size: 30px; margin-top: 100px;}
	.irow {width:100%; height:60px; line-height: 60px; font-size:20px; color:#000;}
	.irow .t, .irow .p, .irow .e { display: inline-block; float:left; }
	.irow .t { font-weight:bold; width:56%;}
	.irow .p {width:22%;}
	.irow .e {width:22%;}

	#mmap {display: none;}

	#addpopup {width:320px; height:320px; background: rgba(247, 247, 247, 0.98);
	box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.1);
	backdrop-filter: blur(10px); transition: 0.5s; visibility: hidden; opacity: 0; border-radius: 15px; position: absolute; top:100vh; left:calc(50vw - 160px);}
	#addpopup .off {display: block; cursor: pointer; position: absolute; top:5px; right:5px; width:30px; height:30px; line-height:40px; text-align: center;}
	#addpopup .off svg { width:20px; height:20px; margin:5px; }
	#addpopup .t {height:70px; line-height:100px; text-align: center; color:#666; font-size: 20px;}
	#addpopup i#checksvg {width:150px; height:150px; display:block; margin:0 auto;}
	#addpopup i#checksvg svg{ width:150px; height:150px; }
	#addpopup a{ text-decoration: none; }
	#addpopup a:hover{ color:#000; }
	#addpopup a#cont {font-size:20px; height:40px; line-height: 40px; color:#666; text-align: center; display: block;}
	#addpopup a#addtogood {font-size:22px; height:60px; line-height: 60px; color:#666; text-align: center; font-weight: bold; display: block;}

	#addpopup.act { opacity:1; visibility: visible; top:calc(50vh - 160px); transition-delay: 0.2s; transition:0.6; }


	@media only screen and (max-width: 1200px) {
		#conts {width:calc(100% - 30px); margin:0px auto;}
		.conl { float:none; width:100%; }
		.conr {float:none; width:100%; display: none;}
		.conl h1 {font-size:20px; margin-bottom: 30px;}
		.conl .crow {font-size:16px; margin-bottom: 30px;}
		#cform {width:calc(100% - 50px); margin-left: 50px;}
		#cform input, #cform textarea { width:calc(100% - 50px); margin:0 25px; font-size: 14px; }
		#cform .imsg {margin-left: 30px; font-size: 12px; line-height: 17px; margin-bottom: 0;}
		#wus {height:20px; font-size: 22px; left:-180px; top:150px;}
		#send { height:38px; line-height: 38px; font-size: 14px; width:220px; }
		#cinf {margin:30px auto;}
		#cinf h2 {font-family: Gilroy-Bold; font-size: 20px; margin-top: 50px;}
		.irow {font-size: 14px; margin-bottom: 20px; overflow: hidden;}
		.irow .t {float:none; font-family: Gilroy-Bold; width:100%; height:20px; line-height: 20px; display: block; white-space: nowrap;}
		.irow .p { width:50%; height:40px; line-height: 40px; float:left; }
		.irow .e { width:50%; height:40px; line-height: 40px; float:right; }

		#mmap {display: block; position: relative; width: calc(100% + 30px); margin: 0 -15px 0px -15px;}
		#mmap img {width:100%; display: block;}
		#pagecontent {margin-bottom: 0;}

		#addpopup .t { font-size:16px; }
		#addpopup a#addtogood { font-size: 18px; }
		#addpopup i#checksvg svg{ width:120px; height:120px; margin:15px; }
	}	
</style>

<div id="conts">
	<div class="conl">
		<h1>Контакти: </h1>
		<div class="crow"><?=$flex->address?></div>

		<div class="crow"><?=$flex->phones?></div>

		<div class="crow"><?=$flex->email?></div>
	</div>

	<div class="conr">
		<a target="_blank" href="<?=$flex->maplink?>">
			<img src="/assets/img/map.png" alt="map">
		</a>
	</div>

	<br clear="all">

	<div class="conl">
		<form id="formcontacts" action="/send/contacts/">
		<div id="cform">
			<div id="wus">Напишіть нам</div>
			<input id="fio" type="text" name="fio" placeholder="Ім'я">
			<div class="imsg" id="fiomsg"></div>

			<input id="phone" type="text" name="phone" placeholder="Телефон">
			<div class="imsg" id="phonemsg"></div>

			<input id="email" type="text" name="email" placeholder="E-mail">
			<div class="imsg" id="emailmsg"></div>

			<textarea id="text" name="text" placeholder="Повідомлення"></textarea>
			<div class="imsg" id="textmsg"></div>
		</div>

		<a href="#" id="send">НАДІСЛАТИ</a>
		</form>
	</div>

	<div class="conr">
		<div class="soct">Приєднуйтесь до клубу кулінарного <br>масла у соц. мережах!</div>
		<div class="soc">
			<a href="<?=$flex->instalink?>"> <i class="instsvg"></i> </a>
			<a href="<?=$flex->facebooklink?>"> <i class="fbsvg"></i> </a>
			<a href="<?=$flex->youtubelink?>"> <i class="ytsvg"></i> </a>
		</div>
	</div>

	<br clear="all">

	<div id="cinf">
		
		<? if(5 > 10): for ($i=1; $i < 13; $i++): ?>
		
		<div class="irow">
			<div class="t"><?=$flex->{'c'.$i.'n'}?></div>
			<div class="p"><?=$flex->{'c'.$i.'p'}?></div>
			<div class="e"><?=$flex->{'c'.$i.'m'}?></div>
		</div>

		<? endfor; endif; ?>

		<div class="irow">
			<div class="t"><?=$flex->c7n?></div>
			<div class="p"><?=$flex->c7p?></div>
			<div class="e"><?=$flex->c7m?></div>
		</div>

		<div class="irow">
			<div class="t"><?=$flex->c8n?></div>
			<div class="p"><?=$flex->c8p?></div>
			<div class="e"><?=$flex->c8m?></div>
		</div>

		<div class="irow">
			<div class="t"><?=$flex->c12n?></div>
			<div class="p"><?=$flex->c12p?></div>
			<div class="e"><?=$flex->c12m?></div>
		</div>

		<!-- <h2>ТОВ «УКРОЛІЯПРОДУКТ»</h2>

		<div class="irow">
			<div class="t"><?//=$flex->c13n?></div>
			<div class="p"><?//=$flex->c13p?></div>
			<div class="e"><?//=$flex->c13m?></div>
		</div>

		<div class="irow">
			<div class="t"><?//=$flex->c14n?></div>
			<div class="p"><?//=$flex->c14p?></div>
			<div class="e"><?//=$flex->c14m?></div>
		</div> -->

	</div>

	<div id="mmap">
		<a target="_blank" href="<?=$flex->maplink?>">
			<img src="/assets/img/map.png" alt="map">
		</a>
	</div>

	<div id="addpopup">
		<a class="off" href="#">
			<i class="closesvg"></i>
		</a>
		<div class="t"><?=$flex->poptxt?></div>
		<i id="checksvg"></i>
		<a href="/" id="addtogood"> ПЕРЕЙТИ НА ГОЛОВНУ </a>
	</div>
</div>