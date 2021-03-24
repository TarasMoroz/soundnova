<style>
  .card-tools button {display: inline-block; margin-right: 20px;}
</style>

<div id="csv">

</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Видео (<?=$cntVideos?>) 
      <div class="btn-group" style="margin-left: 20px;">
        <button type="button" class="btn btn-default">
          <? if(isset($items[$ftrItem])): ?>
            <?=$items[$ftrItem]?>
          <? else: ?> 
            Все типы видео 
          <? endif; ?>
        </button>
        <button type="button" class="btn btn-default dropdown dropdown-icon" aria-expanded="false">
          <i class="fas fa-angle-down right"></i>
          <div class="dropdown-menu" role="menu" x-placement="bottom-start">
            <div>
              <a class="dropdown-item ajax-action" data-action="show_videos" href="#">Все типы видео</a>
              <div class="dropdown-divider"></div>
              <? foreach($items as $key => $name): ?>
              <a class="dropdown-item ajax-action" data-action="show_videos?item=<?=$key?>" href="#"><?=$name?></a>
              <? endforeach; ?>
            </div>
          </div>
        </button>
      </div>
    </h3>

    <div class="card-tools" style="display: flex;">
      <button type="button" class="btn btn-success ajax-action" data-action="show_video_form">
        <i class="fas fa-plus"></i> добавить видео
      </button>
      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-testcsv">Импорт товаров  CSV</button> -->
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
          <th></th>
          <th>Название</th>
          <th>Код YouTube</th>
          <th>Сортировка</th>
          <th>ID связанной сущности</th>
          <th>Тип</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($videos as $vid): ?>
        <tr id="video<?=$vid['id']?>">
          <td><?=$vid['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_video_form" data-id="<?=$vid['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td>
            <img src="/assets/media/video_preview/<?=$vid['img_preview']?>" style="display: <?=($vid['img_preview'] ? 'block' : 'none')?>; width:60px; height:auto;">
          </td>
          <td>
            <?=$vid['title']?>
          </td>
          <td>
            <?=$vid['src']?>
          </td>
          <td>
            <?=$vid['sort']?>
          </td>
          <td>
            <?=($vid['id_item']>0?$vid['id_item']:'')?>
          </td>
          <td>
            <? if(isset($items[$vid['item']])): ?>
              <span class="badge bg-lightblue"><?=$items[$vid['item']]?></span>
            <? else: ?>
              <span class="badge bg-danger">item: <?=$vid['item']?></span>
            <? endif; ?>
          </td>
          <td>
            <? if(!in_array($vid['item'], ['product','product_cont','product_variant_cont1','site_review'])): ?>
            <a href="#" class="delete text-danger" data-model="video" data-id="<?=$vid['id']?>"><i class="nav-icon fas fa-trash"></i></a>
            <? endif; ?>
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
