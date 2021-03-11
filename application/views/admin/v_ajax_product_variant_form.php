<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование вариации продукта</h3>
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
        <label for="id">ID PRODUCT</label>
        <input type="text" class="form-control" id="id_product" placeholder="id_product" value="<?=$data['id_product']?>" disabled>
      </div>

      <div class="form-group">
        <label for="variant">Вариант</label>
        <select id="select_variant" class="form-control">
          <option value="">Не выбран</option>
          <option value="design" <?php if($data['variant'] == 'design') { echo "selected"; } ?>>Designed</option>
          <option value="construct" <?php if($data['variant'] == 'construct') { echo "selected"; } ?>>Construction</option>
          <option value="design_construct" <?php if($data['variant'] == 'design_construct') { echo "selected"; } ?>>Designed+Construction</option>
          <option value="bundle" <?php if($data['variant'] == 'bundle') { echo "selected"; } ?>>Bundle</option>
        </select>
        <input type="hidden" id="variant" placeholder="variant" value="<?=$data['variant']?>">
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-lg-4">
            <b>Изображение бокса</b><br>
            <input type="hidden" id="img_box" value="<?=$data['img_box']?>">
            <img id="img_box_img" src="/assets/media/product_variant-img_box/<?=$data['img_box']?>" style="display: <?=($data['img_box'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">
            <br>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#product_variant_img_box_form">
              <i class="fas fa-image"></i> Выбрать изображение
            </button>
          </div>

          <div class="col-lg-4">
            <b>Изображение фона превью</b><br>
            <input type="hidden" id="img_bg_preview" value="<?=$data['img_bg_preview']?>">
            <img id="img_bg_preview_img" src="/assets/media/product_variant-img_bg_preview/<?=$data['img_bg_preview']?>" style="display: <?=($data['img_bg_preview'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">
            <br>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#product_variant_img_bg_preview_form">
              <i class="fas fa-image"></i> Выбрать изображение
            </button>
          </div>

          <div class="col-lg-4">
            <b>Изображение фона страницы</b><br>
            <input type="hidden" id="img_bg" value="<?=$data['img_bg']?>">
            <img id="img_bg_img" src="/assets/media/product_variant-img_bg/<?=$data['img_bg']?>" style="display: <?=($data['img_bg'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">
            <br>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#product_variant_img_bg_form">
              <i class="fas fa-image"></i> Выбрать изображение
            </button>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="soundcloud">SoundCloud</label>
        <input type="text" class="form-control" id="soundcloud" placeholder="soundcloud" value="<?=$data['soundcloud']?>">
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <label for="price">Цена</label>
            <input type="text" class="form-control" id="price" placeholder="price" value="<?=$data['price']?>">
          </div>

          <div class="col-lg-6">
            <label for="price_old">Старая цена</label>
            <input type="text" class="form-control" id="price_old" placeholder="price_old" value="<?=$data['price_old']?>">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="cont1_title">Заглавие описания</label>
        <input type="text" class="form-control" id="cont1_title" placeholder="cont1_title" value="<?=$data['cont1_title']?>">
      </div>

      <div class="form-group">
        <label for="cont1_desc">Описание</label>
        <textarea class="form-control ckeditor" id="cont1_desc" placeholder="cont1_desc"><?=$data['cont1_desc']?></textarea>
      </div>

      <div class="form-group">
        <label for="cont1_id_video">Видео к описанию</label>
        <div class="row">
          <div class="col-lg-2">
            <input type="text" class="form-control" data-rel="product_variant_cont1<?=(isset($data['id'])?$data['id']:0)?>" id="cont1_id_video" placeholder="cont1_id_video" value="<?=$data['cont1_id_video']?>" disabled>
          </div>
          <div class="col-lg-10">
            <? if(isset($data['id'])): ?>
            <button type="button" class="btn btn-warning add-video" data-p='{"item":"product_variant_cont1","id_item":"<?=$data['id']?>"<?=($data['cont1_id_video']?',"id":"'.$data['cont1_id_video'].'"':'')?>}' data-toggle="modal" data-target="#add_video_popup">
              <i class="fas fa-video"></i> Видео
            </button>
            <? else: ?>
            Для добавления видео сохраните и отредактируйте снова.
            <? endif; ?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="cont2_title">Заглавие (What's inside)</label>
        <input type="text" class="form-control" id="cont2_title" placeholder="cont2_title" value="<?=$data['cont2_title']?>">
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-lg-3">
            <label for="cont2_files">Files</label>
            <input type="text" class="form-control" id="cont2_files" placeholder="cont2_files" value="<?=$data['cont2_files']?>">
          </div>

          <div class="col-lg-3">
            <label for="cont2_sounds">Sounds</label>
            <input type="text" class="form-control" id="cont2_sounds" placeholder="cont2_sounds" value="<?=$data['cont2_sounds']?>">
          </div>

          <div class="col-lg-3">
            <label for="cont2_size">Size</label>
            <input type="text" class="form-control" id="cont2_size" placeholder="cont2_size" value="<?=$data['cont2_size']?>">
          </div>

          <div class="col-lg-3">
            <label for="cont2_format">Format</label>
            <input type="text" class="form-control" id="cont2_format" placeholder="cont2_format" value="<?=$data['cont2_format']?>">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <label for="cont2_pdf">Content info PDF</label>
            <div class="row">
              <div class="col-lg-6">
                <input type="text" class="form-control" id="cont2_pdf" placeholder="cont2_pdf" value="<?=$data['cont2_pdf']?>" disabled>
              </div>
              <div class="col-lg-6">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#product_variant_cont2_pdf_form">
                  <i class="fas fa-file"></i> Выбрать PDF
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <label for="cont2_xls">Content info XLS</label>
            <div class="row">
              <div class="col-lg-6"><input type="text" class="form-control" id="cont2_xls" placeholder="cont2_xls" value="<?=$data['cont2_xls']?>" disabled></div>
              <div class="col-lg-6"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#product_variant_cont2_xls_form">
              <i class="fas fa-file"></i> Выбрать XLS
            </button></div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="cont2_soundcloud">SoundCloud (What's inside)</label>
        <input type="text" class="form-control" id="cont2_soundcloud" placeholder="cont2_soundcloud" value="<?=$data['cont2_soundcloud']?>">
      </div>

      <div class="form-group">
        <b>Изображение бокса (What's inside)</b><br>
        <input type="hidden" id="cont2_img_box" value="<?=$data['cont2_img_box']?>">
        <img id="cont2_img_box_img" src="/assets/media/product_variant-cont2_img_box/<?=$data['cont2_img_box']?>" style="display: <?=($data['cont2_img_box'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">
        <br>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#product_variant_cont2_img_box_form">
          <i class="fas fa-image"></i> Выбрать изображение
        </button>
      </div>

      <div class="form-group">
        <label for="cont3_title">Заглавие (Description)</label>
        <input type="text" class="form-control" id="cont3_title" placeholder="cont3_title" value="<?=$data['cont3_title']?>">
      </div>

      <div class="form-group">
        <label for="cont3_desc">Описание (Description)</label>
        <textarea class="form-control ckeditor" id="cont3_desc" placeholder="cont3_desc"><?=$data['cont3_desc']?></textarea>
      </div>

      <div class="form-group">
        <b>Изображение фона (Description)</b><br>
        <input type="hidden" id="cont3_img_bg" value="<?=$data['cont3_img_bg']?>">
        <img id="cont3_img_bg_img" src="/assets/media/product_variant-cont3_img_bg/<?=$data['cont3_img_bg']?>" style="display: <?=($data['cont3_img_bg'] ? 'block' : 'none')?>; margin:20px 0; width:300px; height:auto;">
        <br>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#product_variant_cont3_img_bg_form">
          <i class="fas fa-image"></i> Выбрать изображение
        </button>
      </div>

      <div class="form-group">
        <label for="cont4_title">Заглавие (Included sounds)</label>
        <input type="text" class="form-control" id="cont4_title" placeholder="cont4_title" value="<?=$data['cont4_title']?>">
      </div>

      <div class="form-group">
        <label for="cont4_include_ids">ID превью звуков (14,11,9,27) в нужном порядке</label>
        <input type="text" class="form-control" id="cont4_include_ids" placeholder="cont4_include_ids" value="<?=$data['cont4_include_ids']?>">
      </div>

      <div class="form-group">
        <label for="cont5_title">Заглавие (Who needs this pack?)</label>
        <input type="text" class="form-control" id="cont5_title" placeholder="cont5_title" value="<?=$data['cont5_title']?>">
      </div>

      <div class="form-group">
        <label for="cont5_video_ids">ID видео (14,11,9,27) в нужном порядке</label>
        <input type="text" class="form-control" id="cont5_video_ids" placeholder="cont5_video_ids" value="<?=$data['cont5_video_ids']?>">
      </div>

      <div class="form-group">
        <label for="cont6_title">Заглавие (How do our clients use this pack?)</label>
        <input type="text" class="form-control" id="cont6_title" placeholder="cont6_title" value="<?=$data['cont6_title']?>">
      </div>

      <div class="form-group">
        <label for="cont6_video_ids">ID видео (14,11,9,27) в нужном порядке</label>
        <input type="text" class="form-control" id="cont6_video_ids" placeholder="cont6_video_ids" value="<?=$data['cont6_video_ids']?>">
      </div>

      <div class="form-group">
        <label for="cont7_title">Заглавие (Bundle slider)</label>
        <input type="text" class="form-control" id="cont7_title" placeholder="cont7_title" value="<?=$data['cont7_title']?>">
      </div>

      <div class="form-group">
        <label for="cont7_id_slider">ID слайдера</label>
        <input type="text" class="form-control" id="cont7_id_slider" placeholder="cont7_id_slider" value="<?=$data['cont7_id_slider']?>">
      </div>

      <div class="form-group">
        <label for="cont8_title">Заглавие (Watch overviews)</label>
        <input type="text" class="form-control" id="cont8_title" placeholder="cont8_title" value="<?=$data['cont8_title']?>">
      </div>

      <div class="form-group">
        <label for="cont8_video_ids">ID видео (14,11,9,27) в нужном порядке</label>
        <input type="text" class="form-control" id="cont8_video_ids" placeholder="cont8_video_ids" value="<?=$data['cont8_video_ids']?>">
      </div>

      <div class="form-group">
        <label for="cont9_title">Заглавие (Tutorials)</label>
        <input type="text" class="form-control" id="cont9_title" placeholder="cont9_title" value="<?=$data['cont9_title']?>">
      </div>

      <div class="form-group">
        <label for="cont9_video_ids">ID видео (14,11,9,27) в нужном порядке</label>
        <input type="text" class="form-control" id="cont9_video_ids" placeholder="cont9_video_ids" value="<?=$data['cont9_video_ids']?>">
      </div>

      <div class="form-group">
        <label for="cont10_title">Заглавие (FAQ)</label>
        <input type="text" class="form-control" id="cont10_title" placeholder="cont10_title" value="<?=$data['cont10_title']?>">
      </div>

      <div class="form-group">
        <label for="cont10_id_faq">ID FAQ</label>
        <input type="text" class="form-control" id="cont10_id_faq" placeholder="cont10_id_faq" value="<?=$data['cont10_id_faq']?>">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="productvariant">Сохранить</button>
    </div>
  </form>
</div>

<iframe id="media-frame" name="media-frame" style="display:none;"></iframe>

<div class="modal fade" id="product_variant_img_box_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение бокса</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="upload/save_img/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/product_variant-img_box" size="20"/> <!-- img and thumbs path -->
          <input id="img_box_img_prev" type="hidden" name="prev" value="<?=$data['img_box']?>" size="20"/> <!-- previous for delete... -->
          <input type="hidden" name="sizes" value="360,570" size="20"/> <!-- empty or comma separated sizes, will add 13244234324_230px.jpg suffix -->
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="product_variant_cont2_img_box_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение бокса</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="upload/save_img/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/product_variant-cont2_img_box" size="20"/> <!-- img and thumbs path -->
          <input id="cont2_img_box_img_prev" type="hidden" name="prev" value="<?=$data['cont2_img_box']?>" size="20"/> <!-- previous for delete... -->
          <input type="hidden" name="sizes" value="360,570" size="20"/> <!-- empty or comma separated sizes, will add 13244234324_230px.jpg suffix -->
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="product_variant_img_bg_preview_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение превью фона</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="upload/save_img/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/product_variant-img_bg_preview" size="20"/> <!-- img and thumbs path -->
          <input id="img_bg_preview_img_prev" type="hidden" name="prev" value="<?=$data['img_bg_preview']?>" size="20"/> <!-- previous for delete... -->
          <input type="hidden" name="sizes" value="160,320,500" size="20"/> <!-- empty or comma separated sizes, will add 13244234324_230px.jpg suffix -->
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="product_variant_img_bg_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение фона страницы</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="upload/save_img/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/product_variant-img_bg" size="20"/> <!-- img and thumbs path -->
          <input id="img_bg_img_prev" type="hidden" name="prev" value="<?=$data['img_bg']?>" size="20"/>
          <!-- <input type="hidden" name="sizes" value="160,320,500" size="20"/> -->
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="product_variant_cont3_img_bg_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение фона (Description)</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="upload/save_img/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/product_variant-cont3_img_bg" size="20"/> <!-- img and thumbs path -->
          <input id="cont3_img_bg_img_prev" type="hidden" name="prev" value="<?=$data['cont3_img_bg']?>" size="20"/>
          <!-- <input type="hidden" name="sizes" value="160,320,500" size="20"/> -->
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="product_variant_cont2_pdf_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите PDF файл</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="upload/save_file/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/product_variant-cont2_pdf" size="20"/> <!-- img and thumbs path -->
          <input id="cont2_pdf_prev" type="hidden" name="prev" value="<?=$data['cont2_pdf']?>" size="20"/>
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="product_variant_cont2_xls_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите XLS файл</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="upload/save_file/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input type="hidden" name="folder" value="media/product_variant-cont2_xls" size="20"/> <!-- img and thumbs path -->
          <input id="cont2_xls_prev" type="hidden" name="prev" value="<?=$data['cont2_xls']?>" size="20"/>
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

  $(document).on('change', '#select_variant', function(){
    val = $(this).val();
    $('#variant').val(val);
  });

  function onSuccess(d) {
    
    obj = JSON.parse(d);

    if(obj.folder == 'media/product_variant-cont2_pdf'){
      $('#cont2_pdf').val(obj.file);
      $('#cont2_pdf_prev').val(obj.file);
    }

    if(obj.folder == 'media/product_variant-cont2_xls'){
      $('#cont2_xls').val(obj.file);
      $('#cont2_xls_prev').val(obj.file);
    }

    if(obj.folder == 'media/product_variant-img_box'){
      $('#img_box').val(obj.img);
      $('#img_box_img_prev').val(obj.img);
      $('#img_box_img').attr('src', '/assets/media/product_variant-img_box/'+obj.img+'?'+Date.now()).show(0);
    }

    if(obj.folder == 'media/product_variant-img_bg_preview'){
      $('#img_bg_preview').val(obj.img);
      $('#img_bg_preview_prev').val(obj.img);
      $('#img_bg_preview_img').attr('src', '/assets/media/product_variant-img_bg_preview/'+obj.img+'?'+Date.now()).show(0);
    }

    if(obj.folder == 'media/product_variant-img_bg'){
      $('#img_bg').val(obj.img);
      $('#img_bg_prev').val(obj.img);
      $('#img_bg_img').attr('src', '/assets/media/product_variant-img_bg/'+obj.img+'?'+Date.now()).show(0);
    }

    if(obj.folder == 'media/product_variant-cont2_img_box'){
      $('#cont2_img_box').val(obj.img);
      $('#cont2_img_box_img_prev').val(obj.img);
      $('#cont2_img_box_img').attr('src', '/assets/media/product_variant-cont2_img_box/'+obj.img+'?'+Date.now()).show(0);
    }

    if(obj.folder == 'media/product_variant-cont3_img_bg'){
      $('#cont3_img_bg').val(obj.img);
      $('#cont3_img_bg_prev').val(obj.img);
      $('#cont3_img_bg_img').attr('src', '/assets/media/product_variant-cont3_img_bg/'+obj.img+'?'+Date.now()).show(0);
    }

    $('.modal-dialog .close').trigger('click');
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
</script>