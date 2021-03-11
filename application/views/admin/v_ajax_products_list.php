<style>
  .card-tools button {display: inline-block; margin-right: 20px;}
</style>

<div id="csv">

</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Продукты (<?=$cntProds?>) 
      <div class="btn-group" style="margin-left: 20px;">
        <button type="button" class="btn btn-default">
          <? if(isset($cats[$ftrCatalog])): ?>
            <?=$cats[$ftrCatalog]['name']?>
          <? else: ?> 
            Все категории 
          <? endif; ?>
        </button>
        <button type="button" class="btn btn-default dropdown dropdown-icon" aria-expanded="false">
          <i class="fas fa-angle-down right"></i>
          <div class="dropdown-menu" role="menu" x-placement="bottom-start">
            <div>
              <a class="dropdown-item ajax-action" data-action="show_products?type=<?=$ftrType?>" href="#">Все категории</a>
              <div class="dropdown-divider"></div>
              <? foreach($cats as $cat): ?>
              <a class="dropdown-item ajax-action" data-action="show_products?catalog=<?=$cat['id']?>&type=<?=$ftrType?>" href="#"><?=$cat['name']?></a>
              <? endforeach; ?>
            </div>
          </div>
        </button>
      </div>

      <div class="btn-group" style="margin-left: 20px;">
        <button type="button" class="btn btn-default">
          <? if(isset($types[$ftrType])): ?>
            <?=$types[$ftrType]['name']?>
          <? else: ?> 
            Все типы
          <? endif; ?>
        </button>
        <button type="button" class="btn btn-default dropdown dropdown-icon" aria-expanded="false">
          <i class="fas fa-angle-down right"></i>
          <div class="dropdown-menu" role="menu" x-placement="bottom-start">
            <div>
              <a class="dropdown-item ajax-action" data-action="show_products?catalog=<?=$ftrCatalog?>" href="#">Все типы</a>
              <div class="dropdown-divider"></div>
              <? foreach($types as $type): ?>
              <a class="dropdown-item ajax-action" data-action="show_products?type=<?=$type['id']?>&catalog=<?=$ftrCatalog?>" href="#"><?=$type['name']?></a>
              <? endforeach; ?>
            </div>
          </div>
        </button>
      </div>
    </h3>

    <div class="card-tools" style="display: flex;">
      <button type="button" class="btn btn-success ajax-action" data-action="show_product_form">
        <i class="fas fa-plus"></i> добавить продукт
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
          <th>Название</th>
          <th>Параметы</th>
          <th>Цена</th>
          <th>Категории</th>
          <th>Типы</th>
          <th>Публикация</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($products as $prod): ?>
        <tr id="products<?=$prod['id']?>">
          <td><?=$prod['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_product_form" data-id="<?=$prod['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td>
            <?=$prod['name']?><br>
            <div style="margin:5px 0;">
            <span class="badge text-<?=($prod['soundcloud'] != '' ? 'success' : 'muted')?>">SoundCloud</span> 
            <span class="badge text-<?=($prod['youtube'] != '' ? 'success' : 'muted')?>">YouTube</span> 
            <span class="badge text-<?=($prod['meta_title'] != '' ? 'success' : 'muted')?>">Meta Title</span> 
            <span class="badge text-<?=($prod['meta_description'] != '' ? 'success' : 'muted')?>">Meta Description</span> 
            <span class="badge text-<?=($prod['cont_description'] != '' ? 'success' : 'muted')?>">Content description</span> 
            </div>
          </td>
          <td>
            <button type="button" class="btn btn-sm btn-success ajax-action" data-extra='{"id_product":<?=$prod['id']?>}' data-action="show_product_variant_form">
              <i class="fas fa-plus"></i> вариация
            </button>
          </td>
          <td>
            
          </td>
          <td>
            <? $pCats = explode(',', $prod['categories']); if(!empty($pCats)): foreach($pCats as $cid): ?>
            <? if(isset($cats[$cid])): ?>
              <span class="badge bg-lightblue"><?=$cats[$cid]['name']?></span>
            <? else: ?>
              <span class="badge bg-danger">id: <?=$cid?></span>
            <? endif; ?>
            <? endforeach; endif; ?>
          </td>
          <td>
            <? $pTypes = explode(',', $prod['types']); if(!empty($pTypes)): foreach($pTypes as $tid): ?>
            <? if(isset($types[$tid])): ?>
              <span class="badge bg-lightblue"><?=$types[$tid]['name']?></span>
            <? else: ?>
              <span class="badge bg-danger">id: <?=$tid?></span>
            <? endif; ?>
            <? endforeach; endif; ?>
          </td>
          <td>
            <button id="pub-product-<?=$prod['id']?>" type="button" class="btn btn-sm btn-<?=($prod['publish']==0?'danger':'success')?> do-publish" data-p='{"id":<?=$prod['id']?>,"item":"product"}'>
              <i class="fas fa-eye"></i>
            </button>
          </td>
          <td>
            <? if(!count($prod['variants'])): ?>
            <a href="#" class="delete text-danger" data-model="products" data-id="<?=$prod['id']?>"><i class="nav-icon fas fa-trash"></i></a>
            <? endif; ?>
          </td>
        </tr>

          <? if(count($prod['variants'])): $variantNames = ['design' => 'Designed','design_construct'=>'Designed+Construction', 'construct'=>'Construction','bundle'=>'Bundle']; ?>
            <? foreach($prod['variants'] as $variant): ?>
              <tr id="productvariant<?=$variant['id']?>">
                <td><?//=$variant['id']?></td>
                <td>
                  
                </td>

                <td>
                  <a href="#" class="ajax-action" data-action="show_product_variant_form" data-extra='{"id_product":<?=$prod['id']?>, "id":<?=$variant['id']?>}'  data-id="<?=$variant['id']?>"><i class="nav-icon fas fa-edit"></i> &nbsp; <?=$variantNames[$variant['variant']]?></a>
                </td>
                <td><b><?=$variant['id']?>.zip</b></td>
                <td><?=$variant['price']?>$ <? if($variant['price_old']): ?>&nbsp;&nbsp; <s><?=$variant['price_old']?>$</s><? endif; ?></td>
                <td></td>
                <td></td>
                <td>
                  <button id="pub-product_variant-<?=$prod['id']?>" type="button" class="btn btn-sm btn-<?=($variant['publish']==0?'danger':'success')?> do-publish" data-p='{"id":<?=$variant['id']?>,"item":"product_variant"}'>
                    <i class="fas fa-eye"></i>
                  </button>
                </td>
                <td><a href="#" class="delete text-danger" data-model="productvariant" data-id="<?=$variant['id']?>"><i class="nav-icon fas fa-trash"></i></a></td>
              </tr>
            <? endforeach; ?>
          <? endif; ?>

        <? endforeach; ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer clearfix">
    <?=$pagination_html?>
  </div>
</div>

<div class="modal fade" id="modal-testcsv">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Загрузите CSV файл с товарами</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="audio-frame" name="audio-frame" style="display:none;"></iframe>
        <form method="post" action="upload/save_csv/" target="audio-frame" enctype="multipart/form-data">
          <input type="file" name="userfile" size="20"/><br/><br/>
          <input class="btn btn-success" type="submit" value="Загрузить"/>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
  
  // проверяем CSV файл.
  function onSuccess(d) {
    $('.close').trigger('click');
    $("#csv").html('Анализ CSV файла...');
    $.post('/admin/csv', {'file':d}, function(d){ $("#csv").html(d); });
  }

  function onError(d) {
    alert('error: '+ d);
  }

</script>
