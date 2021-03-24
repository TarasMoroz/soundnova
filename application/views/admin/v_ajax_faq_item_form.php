<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование вопроса</h3>
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
        <label for="id_faq">ID FAQ</label>
        <input type="text" class="form-control" id="id_faq" placeholder="id_faq" value="<?=$data['id_faq']?>" disabled>
      </div>

      <div class="form-group">
        <label for="name">Вопрос</label>
        <input type="text" class="form-control" id="name" placeholder="name" value="<?=$data['name']?>">
      </div>

      <div class="form-group">
        <label for="desc">Ответ на вопрос</label>
        <textarea class="form-control ckeditor" id="desc" placeholder="desc"><?=$data['desc']?></textarea>
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="faq_item">Сохранить</button>
    </div>
  </form>
</div>

<script src="<?php echo base_url("assets/ckeditor/ckeditor.js"); ?>"></script>
<script src="<?php echo base_url("assets/ckeditor/adapters/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/ckeditor/config.js"); ?>"></script>

<script type="text/javascript">
  
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