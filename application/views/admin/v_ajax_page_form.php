<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование страницы</h3>
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
        <input type="text" class="form-control" id="alias" placeholder="alias" value="<?=$data['alias']?>" <? if($data['alias']): ?>disabled<? endif; ?>>
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
        <label for="text">Текст страницы</label>
        <textarea class="form-control ckeditor" id="text" placeholder="text"><?=$data['text']?></textarea>
      </div>

      <div id="flexdata">
        <? $flexdata = ($data['flexdata'] != '') ? json_decode($data['flexdata']) : [] ; ?>
        <? foreach($flexdata as $key => $val): ?>
        <div id="flex-<?=$key?>" class="form-group">
          <label class="col-sm-2"><?=$key?><br>
          <button data-id="flex-<?=$key?>" class="del-flexdata btn btn-danger btn-xs">Удалить</button>
          </label>
          <div class="col-sm-10" id="flexrows">
            <textarea class="textarea-flex form-control" rows="3" data-field="<?=$key?>" placeholder="Введите данные поля <?=$key?>"><?=$val?></textarea>
          </div>
        </div>
        <? endforeach; ?>
      </div>

    </div> 
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="pages">Сохранить</button>
    </div>
  </form>
</div>

<div class="card card-default">
  <div class="card-body">
    <div class="input-group right" style="width:400px;">
        <input type="text" id="inputflex" class="form-control" placeholder="Название поля данных">
        <span class="input-group-btn">
            <button type="button" id="submitflex" class="btn btn-default">Добавить поле</button>
        </span>
      </div>
  </div>
</div>

<script src="<?php echo base_url("assets/ckeditor/ckeditor.js"); ?>"></script>
<script src="<?php echo base_url("assets/ckeditor/adapters/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/ckeditor/config.js"); ?>"></script>

<script type="text/javascript">

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