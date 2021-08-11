<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование скидочного купона</h3>
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
        <label for="code">Код купона</label>
        <input type="text" class="form-control" id="code" placeholder="code" value="<?=$data['code']?>">
      </div>

      <div class="form-group">
        <label for="value">Значение скидки</label>
        <input type="text" class="form-control" id="value" placeholder="value" value="<?=$data['value']?>">
      </div>

      <div class="form-group">
        <label for="is_percent">Тип</label>
        <div class="row">
          <div class="col-lg-6">
            <select id="select_is_percent" class="form-control">
              <!-- <option value="">Не выбран</option> -->
              <option value="1" <?php if($data['is_percent'] == 1) { echo "selected"; } ?>>Процентная скидка</option>
              <option value="0" <?php if($data['is_percent'] == 0) { echo "selected"; } ?>>Скидка в долл.</option>
            </select>
          </div>
          <div class="col-lg-6">
            <input type="hidden" id="is_percent" class="form-control" placeholder="is_percent" value="<?=$data['is_percent']?>" disabled>
          </div>
        </div>
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="coupon">Сохранить</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $(document).on('change', '#select_is_percent', function(){
    val = $(this).val();
    $('#is_percent').val(val);
  });
</script>