<div class="card">
  <div class="card-header">
    <h3 class="card-title">Отзывы на главной сайта (<?=count($reviews)?>)</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-success ajax-action" data-action="show_site_review_form">
        <i class="fas fa-plus"></i> добавить отзыв
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
          <th>Имя автора</th>
          <th>Должность</th>
          <th>Сортировка</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($reviews as $review): ?>
        <tr id="site_review<?=$review['id']?>">
          <td><?=$review['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_site_review_form" data-id="<?=$review['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td><?=$review['person_name']?></td>
          <td><?=$review['person_position']?></td>
          <td>
            <?=$review['sort']?>
          </td>
          <td>
            <a href="#" class="delete text-danger" data-model="site_review" data-id="<?=$review['id']?>"><i class="nav-icon fas fa-trash"></i></a>
          </td>
        </tr>
        <? endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
  
</script>