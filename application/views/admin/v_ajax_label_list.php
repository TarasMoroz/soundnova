<div class="card">
  <div class="card-header">
    <h3 class="card-title">Метки (<?=count($labels)?>)</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-success ajax-action" data-action="show_label_form">
        <i class="fas fa-plus"></i> добавить метку
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
          <th>Цвет</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($labels as $label): ?>
        <tr id="label<?=$label['id']?>">
          <td><?=$label['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_label_form" data-id="<?=$label['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td><?=$label['name']?></td>
          <td>
            <div style="width:14px; height: 14px; display: inline-block; margin-right: 15px; background-color: <?=$label['color']?>;"></div>
            <?=$label['color']?>
          </td>
          <td>
            <a href="#" class="delete text-danger" data-model="label" data-id="<?=$label['id']?>"><i class="nav-icon fas fa-trash"></i></a>
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
