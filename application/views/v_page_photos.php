
<div class="row popup-gallery">

<? $i=0; foreach($files as $file): if(substr($file, -4) == ".jpg"): $file = str_replace("\\", "/", substr($file,1)); ?>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<a href="<?=$file?>">
<div class="pic" style="background-image:url(<?=$file?>);"></div>
</a>
</div>

<? $i++; endif; endforeach; ?>

</div>
