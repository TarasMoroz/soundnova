<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование метки</h3>
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
        <label for="name">Название</label>
        <input type="text" class="form-control" id="name" placeholder="name" value="<?=$data['name']?>">
      </div>

      <div class="form-group">
        <label for="color">Цвет (rgba, hex)</label>
        <input type="text" class="form-control" id="color" placeholder="color" value="<?=$data['color']?>">
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="label">Сохранить</button>
    </div>
  </form>
</div>

<script type="text/javascript">

</script>