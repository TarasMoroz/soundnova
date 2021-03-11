<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование продукта</h3>
  </div>
  <!-- /.card-header -->
  <style>.select2-container--default .select2-selection--multiple .select2-selection__choice {background-color: #000;}</style>
  <!-- form start -->
  <form role="form" id="form">
    <div class="card-body">
      <? //echo print_r($data); ?> 
      
      <? if(isset($data['id'])): ?>
      <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" placeholder="id" value="<?=$data['id']?>" disabled>
      </div>
      <? endif; ?>

      <div class="form-group">
        <label for="alias">alias</label>
        <input type="text" class="form-control" id="alias" placeholder="alias" value="<?=$data['alias']?>" <? if(isset($data['id']) && $data['alias'] != ''): ?>disabled<? endif; ?>>
      </div>

      <div class="form-group">
        <label for="name">Название</label>
        <input type="text" class="form-control" id="name" placeholder="name" value="<?=$data['name']?>">
      </div>

      <div class="form-group">
        <label for="meta_title">Meta Title</label>
        <input type="text" class="form-control" id="meta_title" placeholder="meta_title" value="<?=$data['meta_title']?>">
      </div>

      <div class="form-group">
        <label for="meta_description">Meta Description</label>
        <textarea class="form-control" id="meta_description" placeholder="meta_description"><?=$data['meta_description']?></textarea>
      </div>

      <div class="form-group">
        <label for="categories">Категории</label>
        <input type="hidden" class="form-control" id="categories" placeholder="categories" value="<?=$data['categories']?>">

        <select id="categoriesselect" class="form-control select2" multiple="" name="selectcategories[]">
          <? $selectedCategories = explode(',', $data['categories']); foreach ($categories as $cat): ?>
              <option value="<?=$cat['id']?>" <?=(in_array($cat['id'], $selectedCategories) ? 'selected' : '')?>><?=$cat['name']?></option>
          <? endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label for="types">Типы</label>
        <input type="hidden" class="form-control" id="types" placeholder="types" value="<?=$data['types']?>">

        <select id="typesselect" class="form-control select2" multiple="" name="selecttypes[]">
          <? $selectedTypes = explode(',', $data['types']); foreach ($types as $type): ?>
              <option value="<?=$type['id']?>" <?=(in_array($type['id'], $selectedTypes) ? 'selected' : '')?>><?=$type['name']?></option>
          <? endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label for="id_label">Метка</label>
        <select id="select_id_label" class="form-control">
          <option value="">Метка не выбрана</option>
          <?php foreach($labels as $label): ?>
          <option value="<?=$label['id']?>" <?php if($label['id'] == $data['id_label']) { echo "selected"; } ?>><?=$label['name']?></option>
          <?php endforeach; ?>
        </select>
        <input type="hidden" id="id_label" placeholder="id_label" value="<?=$data['id_label']?>">
      </div>

      <div class="form-group">
        <label for="soundcloud">SoundCloud</label>
        <input type="text" class="form-control" id="soundcloud" placeholder="soundcloud" value="<?=$data['soundcloud']?>">
      </div>

      <div class="form-group">
        <label for="youtube">YouTube</label>
        <input type="text" class="form-control" id="youtube" placeholder="youtube" value="<?=$data['youtube']?>">
      </div>

      <div class="form-group">
        <label for="id_video">Видео продукта</label>
        <div class="row">
          <div class="col-lg-2">
            <input type="text" class="form-control" data-rel="product<?=(isset($data['id'])?$data['id']:0)?>" id="id_video" placeholder="id_video" value="<?=$data['id_video']?>" disabled>
          </div>
          <div class="col-lg-10">
            <? if(isset($data['id'])): ?>
            <button type="button" class="btn btn-warning add-video" data-p='{"item":"product","id_item":"<?=$data['id']?>"<?=($data['id_video']?',"id":"'.$data['id_video'].'"':'')?>}' data-toggle="modal" data-target="#add_video_popup">
              <i class="fas fa-video"></i> Видео
            </button>
            <? else: ?>
            Для добавления видео сохраните продукт и отредактируйте снова.
            <? endif; ?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="cnt_elements">Ко-во элементов внутри</label>
        <input type="text" class="form-control" id="cnt_elements" placeholder="cnt_elements" value="<?=$data['cnt_elements']?>">
      </div>

      <div class="form-group">
        <label for="cnt_sales_public">Ко-во продаж.</label>
        <input type="text" class="form-control" id="cnt_sales_public" placeholder="cnt_sales_public" value="<?=$data['cnt_sales_public']?>">
      </div>

      <div class="form-group">
        <label for="cont_description">Описание</label>
        <textarea class="form-control ckeditor" id="cont_description" placeholder="cont_description"><?=$data['cont_description']?></textarea>
      </div>

      <div class="form-group">
        <label for="cont_id_video">Видео к описанию</label>
        <div class="row">
          <div class="col-lg-2">
            <input type="text" class="form-control" data-rel="product_cont<?=(isset($data['id'])?$data['id']:0)?>" id="cont_id_video" placeholder="cont_id_video" value="<?=$data['cont_id_video']?>" disabled>
          </div>
          <div class="col-lg-10">
            <? if(isset($data['id'])): ?>
            <button type="button" class="btn btn-warning add-video" data-p='{"item":"product_cont","id_item":"<?=$data['id']?>"<?=($data['cont_id_video']?',"id":"'.$data['cont_id_video'].'"':'')?>}' data-toggle="modal" data-target="#add_video_popup">
              <i class="fas fa-video"></i> Видео
            </button>
            <? else: ?>
            Для добавления видео сохраните продукт и отредактируйте снова.
            <? endif; ?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="adv1">Преимущество 1</label>
        <input type="text" class="form-control" id="adv1" placeholder="adv1" value="<?=$data['adv1']?>">
      </div>

      <div class="form-group">
        <label for="adv2">Преимущество 2</label>
        <input type="text" class="form-control" id="adv2" placeholder="adv2" value="<?=$data['adv2']?>">
      </div>

      <div class="form-group">
        <label for="adv3">Преимущество 3</label>
        <input type="text" class="form-control" id="adv3" placeholder="adv3" value="<?=$data['adv3']?>">
      </div>

      <div class="form-group">
        <label for="related_ids">ID связанных продуктов (1,3,6,7)</label>
        <input type="text" class="form-control" id="related_ids" placeholder="related_ids" value="<?=$data['related_ids']?>">
      </div>

      <div class="form-group">
        <h3>Поля для пака</h3>
        <p>
          В шаблонах текста и заглавия использовать <br>
          [bundle_name] - название бандла <br>
          [bundle_price] - стоимость бандла <br>
          [bundles_packs_price] - стоимость суммарно взятых паков в бандле (выше стоимости бандла) <br>
          [save_percent] - % экономии при покупке бандла</p>
      </div>

      <div class="form-group">
        <label for="bundle_ids">ID бандлов (3,4,8,9) *только для пака</label>
        <input type="text" class="form-control" id="bundle_ids" placeholder="bundle_ids" value="<?=$data['bundle_ids']?>">
      </div>

      <div class="form-group">
        <label for="bundle_slider_title">Заглавие на слайде бандла *только для пака</label>
        <input type="text" class="form-control" id="bundle_slider_title" placeholder="bundle_slider_title" value="<?=$data['bundle_slider_title']?>">
      </div>

      <div class="form-group">
        <label for="bundle_slider_text">Текст на слайде бандла *только для пака</label>
        <input type="text" class="form-control" id="bundle_slider_text" placeholder="bundle_slider_text" value="<?=$data['bundle_slider_text']?>">
      </div>

      <div class="form-group">
        <h3>Поля для бандла</h3>
      </div>

      <div class="form-group">
        <label for="package_ids">ID паков (3,4,8,9) *только для бандла</label>
        <input type="text" class="form-control" id="package_ids" placeholder="package_ids" value="<?=$data['package_ids']?>">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="products">Сохранить</button>
    </div>
  </form>
</div>

<script src="<?php echo base_url("assets/ckeditor/ckeditor.js"); ?>"></script>
<script src="<?php echo base_url("assets/ckeditor/adapters/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/ckeditor/config.js"); ?>"></script>

<script type="text/javascript">

  $('#typesselect').select2();
  $('#categoriesselect').select2();

    // удаление типов
  $('#typesselect').on('select2:unselecting', function(event) {
    seldata = event.params.args.data;
    currTypes = $('#types').val().split(',');

    index = currTypes.indexOf(seldata.id);
    if (index > -1) currTypes.splice(index, 1);

    currTypes = currTypes.filter(function (el) { return parseInt(el) > 0; });

    $('#types').val(currTypes.join(','));

    // $.post('/admin/ajax_deltype', {'id_tag':seldata.id,'id_item':askId,'type':'qa'}, function(data){
    //   if(data.result) console.log('tag deleted or unbinded from ask!');
    // }, 'json');
  });

  // выбор типа
  $('#typesselect').on('select2:selecting', function (event) {
    seldata = event.params.args.data;
    currTypes = $('#types').val().split(',');

    if(currTypes.indexOf(seldata.id) === -1){
      currTypes.push(seldata.id);
    }

    currTypes = currTypes.filter(function (el) { return parseInt(el) > 0; });

    $('#types').val(currTypes.join(','));

    // $.post('/admin/ajax_settype', {'title':seldata.text,'id_item':askId,'type':'qa'}, function(data){
    //   if(data.result) console.log('existing tag related with ask!');
    // }, 'json');
  }); 

    // удаление категорий
  $('#categoriesselect').on('select2:unselecting', function(event) {
    seldata = event.params.args.data;
    currArr = $('#categories').val().split(',');

    index = currArr.indexOf(seldata.id);
    if (index > -1) currArr.splice(index, 1);

    currArr = currArr.filter(function (el) { return parseInt(el) > 0; });

    $('#categories').val(currArr.join(','));

    // $.post('/admin/ajax_deltype', {'id_tag':seldata.id,'id_item':askId,'type':'qa'}, function(data){
    //   if(data.result) console.log('tag deleted or unbinded from ask!');
    // }, 'json');
  });

  // выбор типа
  $('#categoriesselect').on('select2:selecting', function (event) {
    seldata = event.params.args.data;
    currArr = $('#categories').val().split(',');

    if(currArr.indexOf(seldata.id) === -1){
      currArr.push(seldata.id);
    }

    currArr = currArr.filter(function (el) { return parseInt(el) > 0; });

    $('#categories').val(currArr.join(','));

    // $.post('/admin/ajax_settype', {'title':seldata.text,'id_item':askId,'type':'qa'}, function(data){
    //   if(data.result) console.log('existing tag related with ask!');
    // }, 'json');
  });

  $(document).on('change', '#select_id_label', function(){
    val = parseInt($(this).val());
    $('#id_label').val(val);
  });

  // initializing text editor

  var protDomain = location.protocol+'//'+location.hostname;

  $('textarea.ckeditor').ckeditor({
    filebrowserBrowseUrl: protDomain+'/assets/ckeditor/kcfinder/browse.php?type=files',
    filebrowserImageBrowseUrl:protDomain+'/assets/ckeditor/kcfinder/browse.php?type=images',
    filebrowserFlashBrowseUrl:protDomain+'/assets/ckeditor/kcfinder/browse.php?type=flash',
    filebrowserUploadUrl:protDomain+'/assets/ckeditor/kcfinder/upload.php?type=files',
    filebrowserImageUploadUrl:protDomain+'/assets/ckeditor/kcfinder/upload.php?type=images',
    filebrowserFlashUploadUrl:protDomain+'/assets/ckeditor/kcfinder/upload.php?type=flash'
  });
</script>