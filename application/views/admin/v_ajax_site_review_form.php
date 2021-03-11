<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование отзыва сайта</h3>
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
        <label for="person_name">Автор отзыва</label>
        <input type="text" class="form-control" id="person_name" placeholder="person_name" value="<?=$data['person_name']?>">
      </div>

      <div class="form-group">
        <label for="person_position">Должность</label>
        <input type="text" class="form-control" id="person_position" placeholder="person_position" value="<?=$data['person_position']?>">
      </div>

      <div class="form-group">
        <label for="description">Краткий текст (для превью отзыва)</label>
        <textarea class="form-control" id="description" placeholder="description"><?=$data['description']?></textarea>
      </div>

      <div class="form-group">
        <label for="id_video">Видео отзыва (если это видео отзыв)</label>
        <div class="row">
          <div class="col-lg-2">
            <input type="text" class="form-control" data-rel="site_review<?=(isset($data['id'])?$data['id']:0)?>" id="id_video" placeholder="id_video" value="<?=$data['id_video']?>" disabled>
          </div>
          <div class="col-lg-10">
            <? if(isset($data['id'])): ?>
            <button type="button" class="btn btn-warning add-video" data-p='{"item":"site_review","id_item":"<?=$data['id']?>"<?=($data['id_video']?',"id":"'.$data['id_video'].'"':'')?>}' data-toggle="modal" data-target="#add_video_popup">
              <i class="fas fa-video"></i> Видео
            </button>
            <? else: ?>
            Для добавления видео сохраните отзыв и отредактируйте снова.
            <? endif; ?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="text">Текст отзыва (полный)</label>
        <textarea class="form-control ckeditor" id="text" placeholder="text"><?=$data['text']?></textarea>
      </div>

      <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" placeholder="sort" value="<?=$data['sort']?>">
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="site_review">Сохранить</button>
    </div>
  </form>
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