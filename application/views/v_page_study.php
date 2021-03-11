
<div id="study">
	<h1><?=$data['flexdata']->h1?></h1>
	
	<img class="img1" src="/assets/img/study/img1.png" alt="img1">
	<p><?=$data['flexdata']->p1?></p>
	<p><?=$data['flexdata']->p2?></p>
	<h2><?=$data['flexdata']->h2p3?></h2>
	<p><?=$data['flexdata']->p3?></p>

	<img class="img2" src="/assets/img/study/img2.png" alt="img2">
	<h2><?=$data['flexdata']->h2p4?></h2>
	<p><?=$data['flexdata']->p4?></p>
	<h2><?=$data['flexdata']->h2p5?></h2>
	<p><?=$data['flexdata']->p5?></p>


	<img class="img3" src="/assets/img/study/img3.png" alt="img3">
	<h2><?=$data['flexdata']->h2p6?></h2>
	<p><?=$data['flexdata']->p6?></p>
	<h2><?=$data['flexdata']->h2p7?></h2>
	<p><?=$data['flexdata']->p7?></p>

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