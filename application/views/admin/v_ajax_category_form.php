<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование категории</h3>
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
        <label for="alias">alias</label>
        <input type="text" class="form-control" id="alias" placeholder="alias" value="<?=$data['alias']?>" <? if(isset($data['id']) && $data['alias'] != ''): ?>disabled<? endif; ?>>
      </div>

      <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" placeholder="sort" value="<?=$data['sort']?>">
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
        <label for="seo_text">Текст (для SEO)</label>
        <textarea class="form-control ckeditor" id="seo_text" placeholder="seo_text"><?=$data['seo_text']?></textarea>
      </div>

      <b>Изображение категории</b><br>

      <div class="form-group">
        <input type="hidden" id="img" value="<?=$data['img']?>">

        <img id="catimg" src="/assets/media/category/<?=$data['img']?>" style="display: <?=($data['img'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">
        <br>

        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#category_img_form">
          <i class="fas fa-image"></i> Выбрать изображение
        </button>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="category">Сохранить</button>
    </div>
  </form>
</div>

<div class="modal fade" id="category_img_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение категории</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="media-frame" name="media-frame" style="display:none;"></iframe>
        <form method="post" action="upload/save_img/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/category" size="20"/> <!-- img and thumbs path -->
          <input id="img_prev" type="hidden" name="prev" value="<?=$data['img']?>" size="20"/> <!-- previous for delete... -->
          <input type="hidden" name="sizes" value="165,320,500" size="20"/> <!-- empty or comma separated sizes, will add 13244234324_230px.jpg suffix -->
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
        if(obj.folder == 'media/category'){
          $('#img').val(obj.img);
          $('#img_prev').val(obj.img); // пишем в поле формы, если за раз 2-3 раза загружает, чтобы прежние удаляло
          $('#catimg').attr('src', '/assets/media/category/'+obj.img+'?'+Date.now()).show(0);
        }

        $('.modal-dialog .close').trigger('click');
      }

      function onError(d) {
        alert('error: '+ d);
      }

      // $(document).on('change', '#select_status', function(){
      //   val = $(this).val();
      //   $('#status').val(val);
      // });

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