<div class="card">
  <div class="card-header">
    <h3 class="card-title">Группы фильтров (<?=count($groups)?>)</h3>

    <div class="card-tools">
      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-testcsv">Импорт товаров  CSV</button> -->
      <button type="button" class="btn btn-success ajax-action" data-action="show_filter_group_form">
        <i class="fas fa-plus"></i> добавить группу
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
          <th>К-во фильтров в группе</th>
          <th>Сортировка</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($groups as $grp): ?>
        <tr id="filtergroup<?=$grp['id']?>">
          <td><?=$grp['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_filter_group_form" data-id="<?=$grp['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td><?=$grp['name_ru']?></td>
          <td><?=$grp['name_ua']?></td>
          <td><?=$grp['cnt_ftrs']?></td>
          <td><?=$grp['sort']?></td>
          <td>
            <a href="#" class="delete text-danger" data-model="filtergroup" data-id="<?=$grp['id']?>"><i class="nav-icon fas fa-trash"></i></a>
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
