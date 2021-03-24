<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование группы фильтра</h3>
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
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save">Сохранить</button>
    </div>
  </form>
</div>

<script type="text/javascript">

      $('#save').on('click', function(e){ // saving information to the DB

        e.preventDefault();

        var formsData = {};

        formsData['model'] = "filtergroup";

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