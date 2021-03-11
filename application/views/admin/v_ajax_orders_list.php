<div class="card">
  <div class="card-header">
    <h3 class="card-title">Заказы (<?=$cntOrders?>)</h3>

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
          <th>Фамилия Имя</th>
          <th>Телефон</th>
          <th>Email</th>
          <th>Сумма</th>
          <th>Дата и время</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($orders as $order): ?>
        <tr id="order<?=$order['id']?>">
          <td><?=$order['id']?></td>
          <td><?=$order['name']?></td>
          <td><?=$order['phone']?></td>
          <td><?=$order['email']?></td>
          <td><?=$order['sum']?></td>
          <td><?=date('d.m.Y в H:i', $order['ts'])?></td>
          <td>
            <button type="button" class="btn btn-warning xs" data-toggle="modal" data-target="#goods<?=$order['id']?>">
              товары
            </button>
          </td>
        </tr>

        <div class="modal fade" id="goods<?=$order['id']?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Товары заказа #<?=$order['id']?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <? $goods = json_decode($order['goods'], true); ?>
                <? foreach($goods as $good): ?>
                <b>[<?=$good['id']?>] </b> <?=$good['t']?> x <?=$good['c']?> шт, <?=$good['p']?> грн. <br><br>
                <? endforeach; ?>
                
                <br><br>
                <b>Обьект заказа:</b><br>
                <?=$order['obj']?><br><br>
              </div>
            </div>
          </div>
        </div>

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
