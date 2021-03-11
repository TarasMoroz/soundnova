<style>
  .card-tools button {display: inline-block; margin-right: 20px;}
</style>

<div id="csv">

</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Звуки (<?=$cntSounds?>) </h3>

    <div class="card-tools" style="display: flex;">
      <button type="button" class="btn btn-success ajax-action" data-action="show_sound_form">
        <i class="fas fa-plus"></i> добавить звук
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
          <th>SoundCloud</th>
          <th>Сортировка</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($sounds as $sound): ?>
        <tr id="sound<?=$sound['id']?>">
          <td><?=$sound['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_sound_form" data-id="<?=$sound['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td>
            <?=$sound['name']?>
          </td>
          <td>
            <?=$sound['soundcloud']?>
          </td>
          <td>
            <?=$sound['sort']?>
          </td>
          <td>
            <a href="#" class="delete text-danger" data-model="sound" data-id="<?=$sound['id']?>"><i class="nav-icon fas fa-trash"></i></a>
          </td>
        </tr>
        <? endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer clearfix">
    <?=$pagination_html?>
  </div>
</div>

<script type="text/javascript">

</script>
