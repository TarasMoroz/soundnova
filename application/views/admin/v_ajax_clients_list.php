<div class="card">
  <div class="card-header">
    <h3 class="card-title">Клиенты (<?=$cntClients?>)</h3>

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
          <th>Фамилия Имя</th>
          <th>Телефон</th>
          <th>Email</th>
          <th>к-во заказов</th>
        </tr>
      </thead>
      <tbody>
        <? foreach($clients as $client): ?>
        <tr id="order<?=$client['id']?>">
          <td><?=$client['name']?></td>
          <td><?=$client['phone']?></td>
          <td><?=$client['email']?></td>
          <td><?=$client['cnt_orders']?></td>
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
