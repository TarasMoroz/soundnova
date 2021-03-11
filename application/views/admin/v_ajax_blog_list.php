<div class="card">
  <div class="card-header">
    <h3 class="card-title">Записи в блоге (<?=$cntPosts?>)</h3>

    <div class="card-tools">
      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-testcsv">Импорт товаров  CSV</button> -->
      <button type="button" class="btn btn-success ajax-action" data-action="show_blog_form">
        <i class="fas fa-plus"></i> добавить запись в блог
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
          <th>Обложка</th>
          <th>Название рус</th>
          <th>Название укр</th>
          <th>alias</th>
          <th>к-во просм.</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($posts as $post): ?>
        <tr id="blog<?=$post['id']?>">
          <td><?=$post['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_blog_form" data-id="<?=$post['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td>
            <img src="/assets/blog/<?=$post['img']?>" style="display: <?=($post['img'] ? 'block' : 'none')?>; width:60px; height:auto;">
          </td>
          <td><?=$post['name_ru']?></td>
          <td><?=$post['name_ua']?></td>
          <td><?=$post['alias']?></td>
          <td><?=$post['cnt_views']?></td>
          <td>
            <a href="#" class="delete text-danger" data-model="blog" data-id="<?=$post['id']?>"><i class="nav-icon fas fa-trash"></i></a>
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
