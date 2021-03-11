
<div id="blog">
	<?php if(!empty($posts)): foreach($posts as $alias => $post): ?>
	<div class="post">
		<div class="post-img" style="background-image:url(<?=$post->img?>);">
			&nbsp;
		</div>
		<div class="post-title">
			<span><?=$post->dates?></span>
			<?=$post->title?>
		</div>
		<div class="post-info">
			<?=$post->article?>
		</div>
	</div>
	<?php endforeach; endif; ?>

	<br clear="all">
</div>

<form id="form-consult" action="/send/consult">
<div id="form">
	<b> <span><?=$flexdata->name?></span>
	<input type="text" name="name">
	</b>

	<b> <span><?=$flexdata->phone?></span>
	<input type="text" name="phone" placeholder="+380" value="+380">
	</b>
	
	<b> <span>&nbsp;</span>
	<button><?=$flexdata->button?></button>
	</b>
	<div class="err"><?=$flexdata->err?></div>
</div>
</form>
