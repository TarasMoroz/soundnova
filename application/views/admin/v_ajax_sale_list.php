<div class="card">
  <div class="card-header">
    <h3 class="card-title">Акции (<?=count($sales)?>)</h3>

    <div class="card-tools">
      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-testcsv">Импорт товаров  CSV</button> -->
      <button type="button" class="btn btn-success ajax-action" data-action="show_sale_form">
        <i class="fas fa-plus"></i> добавить акцию
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
          <th>Дата создания</th>
          <th>Дата окончания</th>
          <th>Публикация</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($sales as $sale): ?>
        <tr id="sale<?=$sale['id']?>">
          <td><?=$sale['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_sale_form" data-id="<?=$sale['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td><?=$sale['name']?></td>
          <td><?=$sale['date_create']?></td>
          <td><?=$sale['date_end']?></td>
          <td>
            <button id="pub-sale-<?=$sale['id']?>" type="button" class="btn btn-sm btn-<?=($sale['publish']==0?'danger':'success')?> do-publish" data-p='{"id":<?=$sale['id']?>,"item":"sale"}'>
              <i class="fas fa-eye"></i>
            </button>
          </td>
          <td>
            <a href="#" class="delete text-danger" data-model="sale" data-id="<?=$sale['id']?>"><i class="nav-icon fas fa-trash"></i></a>
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
