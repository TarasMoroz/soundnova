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
?>

<style>
	#addrev { width:840px; margin:50px auto; }
	#addrev h1 { font-size:35px; }
	#addrev img {width:230px; display: block; margin:0 auto;}
	#addrev input, #addrev textarea { height:30px; width:540px; border:0; border-bottom:1px solid #666; padding:5px 5px; color:#333; font-size:20px; margin:5px 0 0 0; }
	#addrev textarea { height:23px; transition: 0.3s; overflow: hidden; }
	#addrev textarea:focus { height:100px; overflow: auto; transition: 0.3s; }
	#addrev .imsg { height:20px; line-height: 15px; font-size: 16px; margin-bottom:10px; color:#E93C3C; }
	.pa-inf { color:#000 !important; }
	.pa-grn { color:#5EEA7C !important; }
	.pa-red { color:#E93C3C !important; }
	#addrevc {width:540px; margin:0 auto;}
	#add { display: block; width:280px; text-align: center; background: #FFD100;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
border-radius: 15px; height:50px; line-height: 50px; text-decoration: none; text-transform: uppercase; color:#fff; margin:100px auto; font-size:20px; }

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

	@media only screen and (max-width: 1200px){
 		#addrev { width:calc(100% - 30px); margin:0px auto; margin-bottom: 100px; }
 		#addrev h1 { font-size: 20px; font-family:'Gilroy-Bold'; display:block; width:100%; margin-bottom:0px; text-align: center; }
 		#addrev img {width:170px;}
 		#addrevc {width:calc(100% - 20px); margin:0 auto;}
 		#addrev input, #addrev textarea { width:calc(100% - 35px); margin:0 10px; font-size: 14px; }
 		#addrev textarea { height:30px; }
		#addrev .imsg {margin-left: 10px; font-size: 12px; margin-bottom: 0;}
		#add { margin:20px auto; height:38px; line-height: 38px; font-size: 14px; width:220px; }
		#addpopup .t { font-size:16px; }
		#addpopup a#addtogood { font-size: 18px; }
		#addpopup i#checksvg svg{ width:120px; height:120px; margin:15px; }
 	}
</style>

<div id="addrev">
	<h1> <?=$page['title']?> </h1>

	<img src="<?=$pic?>" alt="<?=$page['title']?>">

	<div id="grev">
		<div class="starsadd">
			<i data-value="1" class="starsvg"></i>	
			<i data-value="2" class="starsvg"></i>	
			<i data-value="3" class="starsvg"></i>	
			<i data-value="4" class="starsvg"></i>	
			<i data-value="5" class="starsvg"></i>
		</div>
	</div>

	<div id="addrevc">
		<input type="hidden" id="rate" value="0">
		<input type="hidden" id="id" value="<?=$page['id']?>"/>
		<input id="fio" type="text" name="fio" placeholder="Ім'я">
		<div class="imsg" id="fiomsg"></div>

		<input id="email" type="text" name="email" placeholder="E-mail">
		<div class="imsg" id="emailmsg"></div>

		<textarea id="review" name="review" placeholder="Коментар"></textarea>
		<div class="imsg" id="reviewmsg"></div>
	</div>

	<a href="#" id="add">Залишити відгук</a>

	<div id="addpopup">
		<a class="off" href="#">
			<i class="closesvg"></i>
		</a>
		<div class="t">Дякуємо за Ваш відгук!</div>
		<i id="checksvg"></i>
		<a href="/<?=$lang?>/<?=$page['id']?>/" id="addtogood"> ПЕРЕЙТИ ДО ТОВАРУ </a>
	</div>
</div>