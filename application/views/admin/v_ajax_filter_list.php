<div class="card">
  <div class="card-header">
    <h3 class="card-title">Фильтры (<?=count($ftrs)?>)</h3>

    <div class="card-tools">
      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-testcsv">Импорт товаров  CSV</button> -->
      <button type="button" class="btn btn-success ajax-action" data-action="show_filter_form">
        <i class="fas fa-plus"></i> добавить фильтр
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
          <th>Название рус</th>
          <th>Название укр</th>
          <th>alias</th>
          <th>Группа</th>
          <th>Сортировка</th>
          <th>Изображение</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($ftrs as $ftr): ?>
        <tr id="filter<?=$ftr['id']?>">
          <td><?=$ftr['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_filter_form" data-id="<?=$ftr['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td><?=$ftr['name_ru']?></td>
          <td><?=$ftr['name_ua']?></td>
          <td><?=$ftr['alias']?></td>
          <td><?=$ftr['g_name']?></td>
          <td><?=$ftr['sort']?></td>
          <td>
            <img src="/assets/filter/<?=$ftr['img']?>" style="display: <?=($ftr['img'] ? 'block' : 'none')?>; width:50px; height:auto;">
          </td>
          <td>
            <a href="#" class="delete text-danger" data-model="filter" data-id="<?=$ftr['id']?>"><i class="nav-icon fas fa-trash"></i></a>
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
