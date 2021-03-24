<div class="card">
  <div class="card-header">
    <h3 class="card-title">Группы настроек (<?=count($settings)?>)</h3>

    <div class="card-tools">
      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-testcsv">Импорт товаров  CSV</button> -->
      <button type="button" class="btn btn-success ajax-action" data-action="show_settings_form">
        <i class="fas fa-plus"></i> добавить группу настроек
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
          <th>Название</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($settings as $set): ?>
        <tr id="settings<?=$set['id']?>">
          <td><?=$set['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_settings_form" data-id="<?=$set['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td><?=$set['name']?></td>
          <td>
            <? if($set['id'] > 1): ?>
            <a href="#" class="delete text-danger" data-model="settings" data-id="<?=$set['id']?>"><i class="nav-icon fas fa-trash"></i></a>
            <? endif; ?>
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
