<div id="pages">

<? $queryStr = http_build_query($pagination['query']); ?>

<a href="<?=($pagination['base'].($queryStr ? '?'.$queryStr : ''))?>" class="first-last page-first">
  <i class="larrsvg"></i> First
</a>

<!-- <span class="pages">
  <a href="#">1</a>
  <span class="curr">2</span>
  <a href="#">3</a>
</span> -->

<span class="pages">
<?php 

	$x=0; 
	while($x++<$pagination['pages']):
        $pagePart = ($x == 1) ? '' : '?page='.$x ;
        if($queryStr) $pagePart = ($pagePart == '') ? '?'.$queryStr : $pagePart.'&'.$queryStr;

        $grpStart = $pagination['curr'] - 2;
        $grpEnd = $pagination['curr'] + 2;
        // если это не первая и не последняя страница, посчитаем какие пропускать...
        if( $x > 1 && $x < $grpStart && $pagination['pages'] > 7 || $x > $grpEnd && $x < $pagination['pages'] && $pagination['pages'] > 7 ) { continue; }
?>

<?php if($x == $pagination['pages'] && $grpEnd < $pagination['pages']-1 && $pagination['pages'] > 7){ echo '...' ; } ?>

<?php if($pagination['curr'] == $x || !empty($pagination['switchedPages']) && in_array($x, $pagination['switchedPages'])): ?>
      <span class="curr"> <?=$x?> </span>
<?php else: ?>
      <a href="<?=$pagination['base']?><?=$pagePart?>"> <?=$x?> </a>
<?php endif; ?>

<?php if($x == 1 && $grpStart > 2 && $pagination['pages'] > 7) { echo '...' ; } ?>

 <?php endwhile; ?>
</span>

<a href="<?=($pagination['base'].($pagination['pages']>1 ? '?page='.$pagination['pages'] : '').($queryStr ? ($pagination['pages']>1 ? '&' : '?').$queryStr : ''))?>" class="first-last page-last">
  Last <i class="rarrsvg"></i>
</a>

</div>