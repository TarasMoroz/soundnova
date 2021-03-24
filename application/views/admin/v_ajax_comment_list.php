<div class="card">
  <div class="card-header">
    <h3 class="card-title">Отзывы (<?=$cntComments?>)</h3>

    <div class="card-tools">
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
          <th>Имя</th>
          <th>Email</th>
          <th>Отзыв</th>
          <th>Оценка</th>
          <th>Товар</th>
          <th>Дата и время</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($comments as $comment): ?>
        <tr id="comment<?=$comment['id']?>">
          <td><?=$comment['id']?></td>
          <td><?=$comment['name']?></td>
          <td><?=$comment['email']?></td>
          <td><div style="display: block; max-width: 200px; overflow: hidden;"><?=$comment['comment']?></div></td>
          <td><b><?=$comment['value']?></b></td>
          <td><a href="/ru/product/<?=$comment['alias']?>/" target="_blank"><?=$comment['name_ru']?></a></td>
          <td><?=date('d.m.Y в H:i', $comment['ts'])?></td>
          <td>
            <a href="#" style="display: block; max-width: 200px; overflow: hidden;" class="delete text-danger" data-model="comment" data-id="<?=$comment['id']?>"><i class="nav-icon fas fa-trash"></i></a>
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
