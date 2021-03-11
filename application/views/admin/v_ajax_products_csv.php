
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Данные не корректны (<?=count($wrongData)?>)</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i> </button>
    </div>
  </div>
  <div class="card-body table-responsive p-0" style="display: none;">
    <? if(count($wrongData)): ?>
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>Название</th>
          <th>Алиас категории</th>
          <th>Цена</th>
        </tr>
      </thead>
      <tbody>
        <? foreach($wrongData as $prod): ?>
        <tr>
          <td><?=$prod['id']?></td>
          <td><?=$prod['name_ru']?></td>
          <td><span style="color:<?=(in_array($prod['alias_catalog'], $catAliases) ? 'green' : 'red')?>;"><?=$prod['alias_catalog']?></span></td>
          <td><?=$prod['price']?>$</td>
        </tr>
        <? endforeach; ?>
      </tbody>
    </table>
    <? endif; ?>
  </div>
</div>


<div class="card">
  <div class="card-header">
    <h3 class="card-title">Добавлено новых (<?=count($insertBatchData)?>)</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i> </button>
    </div>
  </div>
  <div class="card-body table-responsive p-0" style="display: none;">
    <? if(count($insertBatchData)): ?>
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>Название</th>
          <th>Алиас категории</th>
          <th>Цена</th>
        </tr>
      </thead>
      <tbody>
        <? foreach($insertBatchData as $prod): ?>
        <tr>
          <td><?=$prod['id']?></td>
          <td><?=$prod['name_ru']?></td>
          <td><span style="color:<?=(in_array($prod['alias_catalog'], $catAliases) ? 'green' : 'red')?>;"><?=$prod['alias_catalog']?></span></td>
          <td><?=$prod['price']?>$</td>
        </tr>
        <? endforeach; ?>
      </tbody>
    </table>
    <? endif; ?>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Обновлено (<?=count($updateBatchData)?>)</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i> </button>
    </div>
  </div>
  <div class="card-body table-responsive p-0" style="display: none;">
    <? if(count($updateBatchData)): ?>
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>Название</th>
          <th>Алиас категории</th>
          <th>Цена</th>
        </tr>
      </thead>
      <tbody>
        <? foreach($updateBatchData as $prod): ?>
        <tr>
          <td><?=$prod['id']?></td>
          <td><?=$prod['name_ru']?></td>
          <td><span style="color:<?=(in_array($prod['alias_catalog'], $catAliases) ? 'green' : 'red')?>;"><?=$prod['alias_catalog']?></span></td>
          <td><?=$prod['price']?>$</td>
        </tr>
        <? endforeach; ?>
      </tbody>
    </table>
    <? endif; ?>
  </div>
</div>