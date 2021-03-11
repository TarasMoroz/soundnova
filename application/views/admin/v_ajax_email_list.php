<div class="card">
  <div class="card-header">
    <h3 class="card-title">Email подписки (<?=$cntEmails?>)</h3>

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
          <th>Email</th>
          <th>Дата и время</th>
        </tr>
      </thead>
      <tbody>
        <? foreach($emails as $email): ?>
        <tr id="email<?=$email['id']?>">
          <td><?=$email['id']?></td>
          <td><?=$email['email']?></td>
          <td><?=date('d.m.Y в H:i', $email['ts'])?></td>
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
