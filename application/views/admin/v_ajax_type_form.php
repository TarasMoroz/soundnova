<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование типа продукта</h3>
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
        <input type="text" class="form-control" id="alias" placeholder="alias" value="<?=$data['alias']?>" <? if(isset($data['id']) && $data['alias'] != ''): ?>disabled<? endif; ?>>
      </div>

      <div class="form-group">
        <label for="name">Название</label>
        <input type="text" class="form-control" id="name" placeholder="name" value="<?=$data['name']?>">
      </div>

      <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" placeholder="sort" value="<?=$data['sort']?>">
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="type">Сохранить</button>
    </div>
  </form>
</div>

<script type="text/javascript">

</script>