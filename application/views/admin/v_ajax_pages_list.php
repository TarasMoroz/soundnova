<div class="card">
  <div class="card-header">
    <h3 class="card-title">Страницы (<?=count($pages)?>)</h3>

    <div class="card-tools">
      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-testcsv">Импорт товаров  CSV</button> -->
      <button type="button" class="btn btn-success ajax-action" data-action="show_page_form">
        <i class="fas fa-plus"></i> добавить страницу
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
          <th>alias</th>
          <th>Публикация</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($pages as $page): ?>
        <tr id="pages<?=$page['id']?>">
          <td><?=$page['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_page_form" data-id="<?=$page['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td><?=$page['name']?></td>
          <td><?=$page['alias']?></td>
          <td>
            <button id="pub-page-<?=$page['id']?>" type="button" class="btn btn-sm btn-<?=($page['publish']==0?'danger':'success')?> do-publish" data-p='{"id":<?=$page['id']?>,"item":"page"}'>
              <i class="fas fa-eye"></i>
            </button>
          </td>
          <td>
            <a href="#" class="delete text-danger" data-model="pages" data-id="<?=$page['id']?>"><i class="nav-icon fas fa-trash"></i></a>
          </td>
        </tr>
        <? endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
</script>