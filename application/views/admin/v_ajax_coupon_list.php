<style>
  .card-tools button {display: inline-block; margin-right: 20px;}
</style>

<div id="csv">

</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Купоны (<?=$cntCoupons?>) </h3>

    <div class="card-tools" style="display: flex;">
      <button type="button" class="btn btn-success ajax-action" data-action="show_coupon_form">
        <i class="fas fa-plus"></i> добавить купон
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i> </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>#</th>
          <th>Код</th>
          <th>Значение</th>
          <th>Тип</th>
          <th>Создан</th>
          <th>К-во применений</th>
          <th>Публикация</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($coupons as $item): ?>
        <tr id="coupon<?=$item['id']?>">
          <td><?=$item['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_coupon_form" data-id="<?=$item['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td>
            <?=$item['code']?>
          </td>
          <td>
            <?=$item['value']?> <?=($item['is_percent'] ? '%' : '$')?>
          </td>
          <td>
            <? if($item['is_percent'] == 1): ?>Процентная скидка<? endif; ?>
            <? if($item['is_percent'] == 0): ?>Скидка в долл.<? endif; ?>
          </td>
          <td>
            <?=$item['dt_create']?>
          </td>
          <td>
            <?=$item['cnt_applies']?>
          </td>
          <td>
            <button id="pub-coupon-<?=$item['id']?>" type="button" class="btn btn-sm btn-<?=($item['publish']==0?'danger':'success')?> do-publish" data-p='{"id":<?=$item['id']?>,"item":"cart_coupon"}'>
              <i class="fas fa-eye"></i>
            </button>
          </td>
          <td>
            <a href="#" class="delete text-danger" data-model="coupon" data-id="<?=$item['id']?>"><i class="nav-icon fas fa-trash"></i></a>
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
