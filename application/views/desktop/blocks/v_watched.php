<? if(count($viewed)): ?>
<div id="watched">
	<h2>
		<?=($lang == 'ru' ? 'Вы просматривали' : 'Ви переглянули')?>
		
		<span class="prodslider-nav" id="watchedslider-nav">
			<a href="#" data-slide="prev" class="prodslider-nav-left"><i class="sllarrsvg"></i></a>
			<a href="#" data-slide="next" class="prodslider-nav-right"><i class="slrarrsvg"></i></a>
		</span>	
	</h2>

	<div class="prodslider">
		<div class="swiper-container" id="watchedslider">
		<div class="swiper-wrapper">

		<? $this->load->view('desktop/v_product_list', ['prod_list'=>$viewed, 'prod_list_slider'=>true]); ?>

		<? if(count($viewed) < 3): ?>
			<? for($i=1; $i <= (3-count($viewed)); $i++): ?>
				<!-- <div class="swiper-slide"> </div> -->
			<? endfor; ?>
		<? endif; ?>

		</div>
		</div>
	</div>
</div>
<? endif; ?>