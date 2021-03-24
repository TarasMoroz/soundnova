<div class="card">
  <div class="card-header">
    <h3 class="card-title">Баннеры (<?=count($banners)?>)</h3>

    <div class="card-tools">
      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-testcsv">Импорт товаров  CSV</button> -->
      <button type="button" class="btn btn-success ajax-action" data-action="show_banner_form">
        <i class="fas fa-plus"></i> добавить баннер
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
          <th>Изображение рус</th>
          <th>Изображение укр</th>
          <th>Название рус, ссылка рус</th>
          <th>Размещение</th>
          <th>Сортировка</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($banners as $banner): ?>
        <tr id="banner<?=$banner['id']?>">
          <td><?=$banner['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_banner_form" data-id="<?=$banner['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td>
            <img src="/assets/banner/<?=$banner['img_ru']?>" style="display: <?=($banner['img_ru'] ? 'block' : 'none')?>; width:100px; height:auto;">
          </td>
          <td>
            <img src="/assets/banner/<?=$banner['img_ua']?>" style="display: <?=($banner['img_ua'] ? 'block' : 'none')?>; width:100px; height:auto;">
          </td>
          <td>
            <?=$banner['name_ru']?> <br> 
            <span class="text-muted">
              <a href="<?=$banner['link_ru']?>" target="_blank"><?=$banner['link_ru']?></a>
            </span>
          </td>
          <td>
            <? if($banner['place'] == 'main_top'): ?>Главная верхний баннер<? endif; ?>
            <? if($banner['place'] == 'main_middle'): ?>Главная акционные предложения<? endif; ?>
          </td>
          <td>
            <?=$banner['sort']?>
          </td>
          <td>
            <a href="#" class="delete text-danger" data-model="banner" data-id="<?=$banner['id']?>"><i class="nav-icon fas fa-trash"></i></a>
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
