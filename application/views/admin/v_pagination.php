<span class="m-0 float-left">
Показано 
	<b><?=$pagination['from']?>-<?=$pagination['to']?></b> из <b><?=$pagination['total']?></b>
</span>

<ul class="pagination pagination-sm m-0 float-right">
<?php 

	$x=0; 
	while($x++<$pagination['pages']):
        $pagePart = ($x == 1) ? '' : '?page='.$x ;
        $queryStr = http_build_query($pagination['query']);
        $pagePart = ($pagePart == '') ? '?'.$queryStr : $pagePart.'&'.$queryStr;
        
        $grpStart = $pagination['curr'] - 2;
        $grpEnd = $pagination['curr'] + 2;
        // если это не первая и не последняя страница, посчитаем какие пропускать...
        if( $x > 1 && $x < $grpStart && $pagination['pages'] > 7 || $x > $grpEnd && $x < $pagination['pages'] && $pagination['pages'] > 7 ) { continue; }
?>

<?php if($x == $pagination['pages'] && $grpEnd < $pagination['pages']-1 && $pagination['pages'] > 7){ echo '<li class="page-item"><a class="page-link" href="#">...</a></li>' ; } ?>

<?php if($pagination['curr'] == $x || !empty($pagination['switchedPages']) && in_array($x, $pagination['switchedPages'])): ?>
      <li class="page-item active"><a class="page-link ajax-action" data-action="<?=$pagination['base']?><?=$pagePart?>" href="#"><?=$x?></a></li>
<?php else: ?>
      <li class="page-item"><a class="page-link ajax-action" data-action="<?=$pagination['base']?><?=$pagePart?>" href="#"><?=$x?></a></li>
<?php endif; ?>

<?php if($x == 1 && $grpStart > 2 && $pagination['pages'] > 7) { echo '<li class="page-item"><a class="page-link" href="#">...</a></li>' ; } ?>

 <?php endwhile; ?> 

</ul>