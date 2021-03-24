<div class="card">
  <div class="card-header">
    <h3 class="card-title">Категории сайта (<?=count($cats)?>)</h3>

    <div class="card-tools">
      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-testcsv">Импорт товаров  CSV</button> -->
      <button type="button" class="btn btn-success ajax-action" data-action="show_category_form">
        <i class="fas fa-plus"></i> добавить категорию
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i> </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <? //echo print_r($ftrs); ?>
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>#</th>
          <th>Картинка</th>
          <th>Alias</th>
          <th>Название</th>
          <th>Сортировка</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($cats as $cat): ?>
        <tr id="category<?=$cat['id']?>">

          <td><?=$cat['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_category_form" data-id="<?=$cat['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td>
            <img src="/assets/media/category/<?=$cat['img']?>" style="display: <?=($cat['img'] ? 'block' : 'none')?>; width:60px; height:auto;">
          </td>
          <td><?=$cat['alias']?></td>
          <td><?=$cat['name']?></td>
          <td><?=$cat['sort']?></td>
          <td>
            <a href="#" class="delete text-danger" data-model="category" data-id="<?=$cat['id']?>"><i class="nav-icon fas fa-trash"></i></a>
          </td>
        </tr>
        <? endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
<!--   <div class="card-footer clearfix">
  </div> -->
</div>

<script type="text/javascript">



</script>
