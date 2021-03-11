<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование видео</h3>
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

      <div class="form-group">
        <label for="variant">Тип видео</label>
        <div class="row">
          <div class="col-lg-4">
            <? if(!in_array($data['item'], ['product','product_cont','product_variant_cont1','site_review'])): ?>
            <select id="select_item" class="form-control">
              <option value="">Не выбран</option>

              <? foreach($items as $key => $name): if(!in_array($key, ['product','product_cont','product_variant_cont1','site_review'])): ?> 
              <option value="<?=$key?>" <?php if($data['item'] == $key) { echo "selected"; } ?>><?=$name?></option>
              <? endif; endforeach; ?>
            </select>
            <? endif; ?>
          </div>
          <div class="col-lg-4">
            <input type="text" id="item" class="form-control" placeholder="item" value="<?=$data['item']?>" disabled>
          </div>
          <div class="col-lg-4">
            <input type="text" id="id_item" class="form-control" value="<?=$data['id_item']?>" disabled>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="title">Название</label>
        <input type="text" class="form-control" id="title" placeholder="title" value="<?=$data['title']?>">
      </div>

      <div class="form-group">
        <label for="subtitle">Текст под названием</label>
        <input type="text" class="form-control" id="subtitle" placeholder="subtitle" value="<?=$data['subtitle']?>">
      </div>

      <div class="form-group">
        <label for="desc">Описание</label>
        <textarea class="form-control" id="desc" placeholder="desc"><?=$data['desc']?></textarea>
      </div>

      <div class="form-group">
        <label for="src">Код YouTube</label>
        <input type="text" class="form-control" id="src" placeholder="src" value="<?=$data['src']?>">
      </div>

      <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" placeholder="sort" value="<?=$data['sort']?>">
      </div>

      <b>Изображение превью (минимум 570 пикс. ширина)</b><br>

      <div class="form-group">

        <input type="hidden" id="img_preview" value="<?=$data['img_preview']?>">

        <img id="vidimg" src="/assets/media/video_preview/<?=$data['img_preview']?>" style="display: <?=($data['img_preview'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">
        <br>

        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#video_img_form">
          <i class="fas fa-image"></i> Выбрать изображение
        </button>
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="video">Сохранить</button>
    </div>
  </form>
</div>

<div class="modal fade" id="video_img_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение превью</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="media-frame" name="media-frame" style="display:none;"></iframe>
        <form method="post" action="upload/save_img/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/video_preview" size="20"/> <!-- img and thumbs path -->
          <input id="img_preview_prev" type="hidden" name="prev" value="<?=$data['img_preview']?>" size="20"/> <!-- previous for delete... -->
          <input type="hidden" name="sizes" value="360,570" size="20"/> <!-- empty or comma separated sizes, will add 13244234324_230px.jpg suffix -->
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

      function onSuccess(d) {
        obj = JSON.parse(d);
        if(obj.folder == 'media/video_preview'){
          $('#img_preview').val(obj.img);
          $('#img_preview_prev').val(obj.img); // пишем в поле формы, если за раз 2-3 раза загружает, чтобы прежние удаляло
          $('#vidimg').attr('src', '/assets/media/video_preview/'+obj.img+'?'+Date.now()).show(0);
        }

        $('.modal-dialog .close').trigger('click');
      }

      function onError(d) {
        alert('error: '+ d);
      }

      $(document).on('change', '#select_item', function(){
        val = $(this).val();
        $('#item').val(val);
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