<!-- events -->
<?php $monthes_array = $this->lang->line('monthes_array'); ?>

<? foreach ($calendars as $keyMonth => $calendar): $correctMonth = ($keyMonth < 10) ? "0".$keyMonth : $keyMonth ; ?>
<section class="pt-small pb-small light-color">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center mb-small" data-nekoanim="fadeInUp" data-nekodelay="10">
				<h1><?=$monthes_array[$correctMonth]?> - <?=$years[$keyMonth]?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mb-sm">

				<?=$calendar?>

			</div>
		</div>
	</div>
</section>
<? endforeach; ?>

<br>

<!-- / events -->
