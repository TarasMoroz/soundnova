<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Редактирование отзыва продукта</h3>
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

      <input type="hidden" class="form-control" id="ts" placeholder="ts" value="<?=$data['ts']?>">
      <input type="hidden" class="form-control" id="id_customer" placeholder="id_customer" value="<?=$data['id_customer']?>">
      <input type="hidden" class="form-control" id="id_product" placeholder="id_product" value="<?=$data['id_product']?>">

      <div class="form-group">
        <label for="name">Автор отзыва</label>
        <input type="text" class="form-control" id="name" placeholder="name" value="<?=$data['name']?>">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="email" value="<?=$data['email']?>">
      </div>

      <div class="form-group">
        <label for="comment">Комментарий</label>
        <textarea class="form-control" id="comment" placeholder="comment"><?=$data['comment']?></textarea>
      </div>

      <div class="form-group">
        <label for="value">Оценка (1-5)</label>
        <input type="text" class="form-control" id="value" placeholder="value" value="<?=$data['value']?>">
      </div>

      <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" placeholder="sort" value="<?=$data['sort']?>">
      </div>

      <div class="form-group">
        <label for="is_buyer">Отзыв от покупателя (1,0)</label>
        <input type="text" class="form-control" id="is_buyer" placeholder="is_buyer" value="<?=$data['is_buyer']?>">
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="save" data-model="product_review">Сохранить</button>
    </div>
  </form>
</div>

<script type="text/javascript">

</script>