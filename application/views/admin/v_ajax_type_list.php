<div class="card">
  <div class="card-header">
    <h3 class="card-title">Типы (<?=count($types)?>)</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-success ajax-action" data-action="show_type_form">
        <i class="fas fa-plus"></i> добавить тип
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
          <th>alias</th>
          <th>Название</th>
          <th>Сортировка</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($types as $type): ?>
        <tr id="type<?=$type['id']?>">
          <td><?=$type['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_type_form" data-id="<?=$type['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td><?=$type['alias']?></td>
          <td><?=$type['name']?></td>
          <td>
            <?=$type['sort']?>
          </td>
          <td>
            <a href="#" class="delete text-danger" data-model="type" data-id="<?=$type['id']?>"><i class="nav-icon fas fa-trash"></i></a>
          </td>
        </tr>
        <? endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">

</script>