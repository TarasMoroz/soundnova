<div class="card">
  <div class="card-header">
    <h3 class="card-title">Результат проверки FTP хранилища (выполнено за <?=$execution_time?> мин., ко-во записей в БД: <?=count($items)?>)</h3>

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
          <th>Продукт</th>
          <th>Вариация</th>
          <th>ID вариации</th>
          <th>Наличие на FTP</th>
          <th>Состояние до проверки</th>
        </tr>
      </thead>
      <tbody>
        <? $variantNames = ['design' => 'Designed','design_construct'=>'Designed+Construction', 'construct'=>'Construction','bundle'=>'Bundle']; ?>
        <? foreach($items as $item): ?>
        <tr id="item<?=$item['id']?>">
          <td><a href="/product/<?=$item['p_alias']?>" target="_blank"><?=$item['p_name']?></a></td>
          <td><?=$variantNames[$item['variant']]?></td>
          <td><?=$item['id']?></td>
          <td>
            <span class="badge text-<?=($item['ftp_exist'] ? 'success' : 'danger')?>">
              <?=$item['id']?>.zip <?=($item['ftp_exist'] ? '' : '(не найден)')?>
            </span> 
          </td>
          <td>
            <?=($item['ftp_exist_prev'] ? 'файл был на FTP прежде' : 'файла не было на FTP прежде')?>
          </td>
        </tr>
        <? endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">

</script>