<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование акции</h3>
  </div>
  <!-- /.card-header -->
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

      <!-- <div class="form-group">
        <label for="products">ID товаров через запятую (1,5,57,12,33 ...)</label>
        <textarea class="form-control" id="products" placeholder="products"><?=$data['products']?></textarea>
      </div> -->

      <div class="form-group">
        <label for="name">Название</label>
        <input type="text" class="form-control" id="name" placeholder="name" value="<?=$data['name']?>">
      </div>

      <div class="form-group">
        <label for="description">Краткое описание</label>
        <textarea class="form-control" id="description" placeholder="description"><?=$data['description']?></textarea>
      </div>

      <div class="form-group">
        <label for="discount_percent">% скидки на продукты (целое число)</label>
        <input type="text" class="form-control" id="discount_percent" placeholder="discount_percent" value="<?=$data['discount_percent']?>">
      </div>

      <div class="form-group">
        <label for="products">Продукты участвующие в акции</label>
        <input type="hidden" class="form-control" id="products" placeholder="products" value="<?=$data['products']?>">

        <select id="productsselect" class="form-control select2" multiple="" name="selectproducts[]">
          <? $selectedProducts = explode(',', $data['products']); foreach ($products as $prod): ?>
              <option value="<?=$prod['id']?>" <?=(in_array($prod['id'], $selectedProducts) ? 'selected' : '')?>><?=$prod['name']?></option>
          <? endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label for="text">Текст</label>
        <textarea class="form-control ckeditor" id="text" placeholder="text"><?=$data['text']?></textarea>
      </div>

      <div class="form-group">
        <div class="row">

          <div class="col-lg-6">
            <b>Лого акции</b><br>
            <input type="hidden" id="img_logo" value="<?=$data['img_logo']?>">
            <img id="img_logo_img" src="/assets/media/sale-img_logo/<?=$data['img_logo']?>" style="display: <?=($data['img_logo'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;"><br>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#sale_img_logo_form">
              <i class="fas fa-image"></i> Выбрать изображение
            </button>
          </div>

          <div class="col-lg-6">
            <b>Фон баннера акции</b><br>
            <input type="hidden" id="img_bg" value="<?=$data['img_bg']?>">
            <img id="img_bg_img" src="/assets/media/sale-img_bg/<?=$data['img_bg']?>" style="display: <?=($data['img_bg'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;"><br>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#sale_img_bg_form">
              <i class="fas fa-image"></i> Выбрать изображение
            </button>
          </div>

        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <label for="date_create">Дата создания</label>
            <input type="text" class="form-control" id="date_create" placeholder="date_create" value="<?=($data['date_create']?$data['date_create']:date('Y-m-d H:i:s'))?>" disabled>
          </div>
          <div class="col-lg-6">
            <label for="date_end">Дата окончания</label>
            <input type="text" class="form-control" id="date_end" placeholder="date_end" value="<?=$data['date_end']?>">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="priority">Приоритет акции (целое число)</label>
        <input type="text" class="form-control" id="priority" placeholder="priority" value="<?=$data['priority']?>">
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="sale">Сохранить</button>
    </div>
  </form>
</div>

<iframe id="media-frame" name="media-frame" style="display:none;"></iframe>

<div class="modal fade" id="sale_img_logo_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение лого</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="upload/save_img/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/sale-img_logo" size="20"/> <!-- img and thumbs path -->
          <input id="img_logo_img_prev" type="hidden" name="prev" value="<?=$data['img_logo']?>" size="20"/> <!-- previous for delete... -->
          <input type="hidden" name="sizes" value="250,500" size="20"/> <!-- empty or comma separated sizes, will add 13244234324_230px.jpg suffix -->
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="sale_img_bg_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение фона</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="upload/save_img/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/sale-img_bg" size="20"/> <!-- img and thumbs path -->
          <input id="img_bg_img_prev" type="hidden" name="prev" value="<?=$data['img_bg']?>" size="20"/> <!-- previous for delete... -->
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url("assets/ckeditor/ckeditor.js"); ?>"></script>
<script src="<?php echo base_url("assets/ckeditor/adapters/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/ckeditor/config.js"); ?>"></script>

<script type="text/javascript">

      // проверяем CSV файл.
      function onSuccess(d) {
        
        obj = JSON.parse(d);

        if(obj.folder == 'media/sale-img_logo'){
          $('#img_logo').val(obj.img);
          $('#img_logo_img_prev').val(obj.img);
          $('#img_logo_img').attr('src', '/assets/media/sale-img_logo/'+obj.img+'?'+Date.now()).show(0);
        }

        if(obj.folder == 'media/sale-img_bg'){
          $('#img_bg').val(obj.img);
          $('#img_bg_img_prev').val(obj.img);
          $('#img_bg_img').attr('src', '/assets/media/sale-img_bg/'+obj.img+'?'+Date.now()).show(0);
        }

        $('.modal-dialog .close').trigger('click');
      }

      function onError(d){
        alert('error: '+ d);
      }

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

      $('#productsselect').select2();

      // удаление продуктов
      $('#productsselect').on('select2:unselecting', function(event) {
        seldata = event.params.args.data;
        currProds = $('#products').val().split(',');

        index = currProds.indexOf(seldata.id);
        if (index > -1) currProds.splice(index, 1);
        currProds = currProds.filter(function (el) { return parseInt(el) > 0; });
        $('#products').val(currProds.join(','));

        // $.post('/admin/ajax_deltype', {'id_tag':seldata.id,'id_item':askId,'type':'qa'}, function(data){
        //   if(data.result) console.log('tag deleted or unbinded from ask!');
        // }, 'json');
      });

      // выбор продуктов
      $('#productsselect').on('select2:selecting', function (event) {
        seldata = event.params.args.data;
        currProds = $('#products').val().split(',');
        if(currProds.indexOf(seldata.id) === -1){
          currProds.push(seldata.id);
        }
        currProds = currProds.filter(function (el) { return parseInt(el) > 0; });
        $('#products').val(currProds.join(','));

        // $.post('/admin/ajax_settype', {'title':seldata.text,'id_item':askId,'type':'qa'}, function(data){
        //   if(data.result) console.log('existing tag related with ask!');
        // }, 'json');
      }); 

</script>