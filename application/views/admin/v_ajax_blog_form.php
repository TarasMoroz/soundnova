<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование записи блога</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" id="form">
    <div class="card-body">
      <? //echo print_r($data); ?>

      <input type="hidden" id="date_add" value="<?=$data['date_add']?>">
      
      <? if(isset($data['id'])): ?>
        <div class="form-group">
          <label for="id">ID</label>
          <input type="text" class="form-control" id="id" placeholder="id" value="<?=$data['id']?>" disabled>
        </div>
      <? endif; ?>

      <div class="form-group">
        <label for="alias">alias</label>
        <input type="text" class="form-control" id="alias" placeholder="alias" value="<?=$data['alias']?>" <? if(isset($data['id'])): ?>disabled<? endif; ?>>
      </div>

      <div class="form-group">
        <label for="name_ru">Название рус.</label>
        <input type="text" class="form-control" id="name_ru" placeholder="name_ru" value="<?=$data['name_ru']?>">
      </div>

      <div class="form-group">
        <label for="name_ua">Название укр.</label>
        <input type="text" class="form-control" id="name_ua" placeholder="name_ua" value="<?=$data['name_ua']?>">
      </div>

      <div class="form-group">
        <label for="meta_title_ru">Meta Title рус.</label>
        <input type="text" class="form-control" id="meta_title_ru" placeholder="meta_title_ru" value="<?=$data['meta_title_ru']?>">
      </div>

      <div class="form-group">
        <label for="meta_title_ua">Meta Title укр.</label>
        <input type="text" class="form-control" id="meta_title_ua" placeholder="meta_title_ua" value="<?=$data['meta_title_ua']?>">
      </div>


      <div class="form-group">
        <label for="meta_description_ru">Meta Description рус.</label>
        <textarea class="form-control" id="meta_description_ru" placeholder="meta_description_ru"><?=$data['meta_description_ru']?></textarea>
      </div>

      <div class="form-group">
        <label for="meta_description_ua">Meta Description укр.</label>
        <textarea class="form-control" id="meta_description_ua" placeholder="meta_description_ua"><?=$data['meta_description_ua']?></textarea>
      </div>

      <div class="form-group">
        <label for="text_ru">Текст рус.</label>
        <textarea class="form-control ckeditor" id="text_ru" placeholder="text_ru"><?=$data['text_ru']?></textarea>
      </div>

      <div class="form-group">
        <label for="text_ua">Текст укр.</label>
        <textarea class="form-control ckeditor" id="text_ua" placeholder="text_ua"><?=$data['text_ua']?></textarea>
      </div>

      <div class="form-group">

        <input type="hidden" id="img" value="<?=$data['img']?>">

        <img id="blogimg" src="/assets/blog/<?=$data['img']?>" style="display: <?=($data['img'] ? 'block' : 'none')?>; margin:20px 0; width:150px; height:auto;">

        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-blogimg">
          <i class="fas fa-image"></i> изображение обложки
        </button>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save">Сохранить</button>
    </div>
  </form>
</div>

<div class="modal fade" id="modal-blogimg">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение обложки</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="media-frame" name="media-frame" style="display:none;"></iframe>
        <form method="post" action="upload/save_blogimg/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
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
          $('.close').trigger('click');
          $("#img").val(d);
          $("#blogimg").attr('src', '/assets/blog/'+d+'?'+Date.now()).css('display','block');
        }

        function onError(d) {
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

      $('#save').on('click', function(e){ // saving information to the DB

        e.preventDefault();

        var formsData = {};

        formsData['model'] = "blog";

        $("form#form input:text, form#form input:hidden, form#form textarea").each(function(indx){
          var thisKey = $(this).attr('id'); // getting key for data object
          var thisVal = $(this).val(); // getting value of inputs
          formsData[thisKey] = thisVal; // placing data inside object
        });

        console.log(formsData);

        $.post('/admin513/update_row', formsData, function(data){
            console.log(data);
            if(data.result){
              $("#dynamic").children().fadeOut(3000);
            }

            $("#alert").html(data.message);
            $("#alert").children().delay(3000).fadeOut(700);
        }, 'json');

        console.log(formsData);
     });
</script>