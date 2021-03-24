<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование баннера</h3>
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
        <label for="placeselect">Размещение</label>
        
        <select class="form-control" id="placeselect">
          <option value="main_top" <? if(!$data['place'] || $data['place'] == 'main_top'): ?>selected<? endif; ?>>Главная верхний баннер (970 x 440)</option>
          <option value="main_middle" <? if($data['place'] == 'main_middle'): ?>selected<? endif; ?>>Главная акционные предложения (323 x 422)</option>
        </select>

        <input type="hidden" class="form-control" id="place" placeholder="place" value="<?=($data['place'] ? $data['place'] : 'main_top')?>">
      </div>

      <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" placeholder="sort" value="<?=$data['sort']?>">
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
        <label for="link_ru">Ссылка на страницу рус.</label>
        <input type="text" class="form-control" id="link_ru" placeholder="link_ru" value="<?=$data['link_ru']?>">
      </div>

      <div class="form-group">
        <label for="link_ua">Ссылка на страницу укр.</label>
        <input type="text" class="form-control" id="link_ua" placeholder="link_ua" value="<?=$data['link_ua']?>">
      </div>

      <div class="form-group">

        <input type="hidden" id="img_ru" value="<?=$data['img_ru']?>">

        <img id="bannerimg_ru" src="/assets/banner/<?=$data['img_ru']?>" style="display: <?=($data['img_ru'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">

        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-img_ru">
          <i class="fas fa-image"></i> изображение баннера рус.
        </button>
      </div>

      <div class="form-group">

        <input type="hidden" id="img_ua" value="<?=$data['img_ua']?>">

        <img id="bannerimg_ua" src="/assets/banner/<?=$data['img_ua']?>" style="display: <?=($data['img_ua'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">

        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-img_ua">
          <i class="fas fa-image"></i> изображение баннера укр.
        </button>
      </div>

      <b>Изображения баннера мобильной версии (только для верхнего основного баннера)</b><br>
      <b>1050 x 490 px</b><br><br>

      <div class="form-group">

        <input type="hidden" id="img_mobile_ru" value="<?=$data['img_mobile_ru']?>">

        <img id="bannerimg_ru_mobile" src="/assets/banner/<?=$data['img_mobile_ru']?>" style="display: <?=($data['img_mobile_ru'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">

        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-img_mobile_ru">
          <i class="fas fa-image"></i> изображение баннера рус. для мобильной версии
        </button>
      </div>

      <div class="form-group">

        <input type="hidden" id="img_mobile_ua" value="<?=$data['img_mobile_ua']?>">

        <img id="bannerimg_ua_mobile" src="/assets/banner/<?=$data['img_mobile_ua']?>" style="display: <?=($data['img_mobile_ua'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">

        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-img_mobile_ua">
          <i class="fas fa-image"></i> изображение баннера укр. для мобильной версии
        </button>
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save">Сохранить</button>
    </div>
  </form>
</div>

<div class="modal fade" id="modal-img_ru">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение баннера рус.</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="media-frame" name="media-frame" style="display:none;"></iframe>
        <form method="post" action="upload/save_banner/" target="media-frame" enctype="multipart/form-data">
          <input type="hidden" name="lang" value="ru" size="20"/><br/><br/>
          <input type="hidden" name="device" value="" size="20"/>
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-img_ua">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение баннера укр.</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="media-frame" name="media-frame" style="display:none;"></iframe>
        <form method="post" action="upload/save_banner/" target="media-frame" enctype="multipart/form-data">
          <input type="hidden" name="lang" value="ua" size="20"/><br/><br/>
          <input type="hidden" name="device" value="" size="20"/>
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-img_mobile_ru">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение баннера рус. для мобильной версии</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="media-frame" name="media-frame" style="display:none;"></iframe>
        <form method="post" action="upload/save_banner/" target="media-frame" enctype="multipart/form-data">
          <input type="hidden" name="lang" value="ru" size="20"/><br/><br/>
          <input type="hidden" name="device" value="_mobile" size="20"/>
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-img_mobile_ua">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение баннера укр. для мобильной версии</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="media-frame" name="media-frame" style="display:none;"></iframe>
        <form method="post" action="upload/save_banner/" target="media-frame" enctype="multipart/form-data">
          <input type="hidden" name="lang" value="ua" size="20"/><br/><br/>
          <input type="hidden" name="device" value="_mobile" size="20"/>
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

      $('#placeselect').on('change', function(e){
        $('#place').val($(this).val());
      });

      // проверяем CSV файл.
      function onSuccess(d) {
        
        var result = JSON.parse(d);

        $('.close').trigger('click');
        $("#img"+result.device+"_"+result.lang).val(result.img);
        $("#bannerimg_"+result.lang+result.device).attr('src', '/assets/banner/'+result.img+'?'+Date.now()).css('display','block');
      }

      function onError(d){
        alert('error: '+ d);
      }

      $('#save').on('click', function(e){ // saving information to the DB

        e.preventDefault();

        var formsData = {};

        formsData['model'] = "banner";

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