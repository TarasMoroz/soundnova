<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование фильтра</h3>
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
        <label for="">Группа фильтра</label>
        <select class="form-control" id="grps">
          <option value="0" disabled>Выберите группу фильтра</option>
          <? foreach($grps as $grp): ?>
          <option value="<?=$grp['id']?>" <? if($grp['id'] == $data['id_filter_group']): ?>selected<? endif; ?>><?=$grp['name_ru']?></option>
          <? endforeach; ?>
        </select>
        <input type="hidden" class="form-control" id="id_filter_group" placeholder="id_filter_group" value="<?=$data['id_filter_group']?>">
      </div>

      <div class="form-group">
        <label for="alias">alias</label>
        <input type="text" class="form-control" id="alias" placeholder="alias" value="<?=$data['alias']?>">
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

        <input type="hidden" id="img" value="<?=$data['img']?>">

        <img id="filterimg" src="/assets/filter/<?=$data['img']?>" style="display: <?=($data['img'] ? 'block' : 'none')?>; margin:20px 0; width:150px; height:auto;">

        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal">
          <i class="fas fa-image"></i> изображение фильтра (логотип)
        </button>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save">Сохранить</button>
    </div>
  </form>
</div>

<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите изображение фильтра (логотип)</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="media-frame" name="media-frame" style="display:none;"></iframe>
        <form method="post" action="upload/save_filterimg/" target="media-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

      function onSuccess(d) {
        $('.close').trigger('click');
        $("#img").val(d);
        $("#filterimg").attr('src', '/assets/filter/'+d+'?'+Date.now()).css('display','block');
      }

      function onError(d) {
        alert('error: '+ d);
      }
        
      $('#grps').on('change', function(e){
        $('#id_filter_group').val($(this).val());
      });


      $('#save').on('click', function(e){ // saving information to the DB

        e.preventDefault();

        var formsData = {};

        formsData['model'] = "filter";

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