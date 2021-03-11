<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование FAQ</h3>
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
        <label for="item">Тип</label>
        <div class="row">
          <div class="col-lg-6">
            <select id="select_item" class="form-control">
              <option value="">Не выбран</option>
              <option value="main" <?php if($data['item'] == 'main') { echo "selected"; } ?>>Для главной</option>
              <option value="product" <?php if($data['item'] == 'product') { echo "selected"; } ?>>Для продукта</option>
            </select>
          </div>
          <div class="col-lg-6">
            <input type="text" id="item" class="form-control" placeholder="item" value="<?=$data['item']?>" disabled>
          </div>
        </div>
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="faq">Сохранить</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $(document).on('change', '#select_item', function(){
    val = $(this).val();
    $('#item').val(val);
  });
</script>