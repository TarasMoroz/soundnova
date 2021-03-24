<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Настройки</h3>
  </div>
  <form role="form" id="form">
    <div class="card-body">

      <? if(isset($data['id'])): ?>
      <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" placeholder="id" value="<?=$data['id']?>" disabled>
      </div>
      <? endif; ?>

      <div class="form-group">
        <label for="name">Название группы настроек</label>
        <input type="text" class="form-control" id="name" placeholder="name" value="<?=$data['name']?>">
      </div>

      <div class="form-group" <? if(!isset($data['id']) || $data['id'] > 1): ?>style="display: none;"<? endif; ?>>
        <label for="password">Пароль</label>
        <input type="text" class="form-control" id="password" value="" placeholder="Для смены пароля введите новый и сохраните настройки">
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
      <button type="submit" class="btn btn-primary" id="save" data-model="settings">Сохранить</button>
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


<script type="text/javascript">

</script>