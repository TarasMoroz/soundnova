<style>
  .card-tools button {display: inline-block; margin-right: 20px;}
</style>

<div id="csv">

</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">FAQ (<?=$cntFaqs?>) </h3>

    <div class="card-tools" style="display: flex;">
      <button type="button" class="btn btn-success ajax-action" data-action="show_faq_form">
        <i class="fas fa-plus"></i> добавить FAQ
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
          <th>Название</th>
          <th></th>
          <th>Тип</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <? foreach($faqs as $faq): ?>
        <tr id="faq<?=$faq['id']?>">
          <td><?=$faq['id']?></td>
          <td>
            <a href="#" class="ajax-action" data-action="show_faq_form" data-id="<?=$faq['id']?>"><i class="nav-icon fas fa-edit"></i></a>
          </td>
          <td>
            <?=$faq['name']?>
          </td>
          <td>
            <button type="button" class="btn btn-sm btn-success ajax-action" data-extra='{"id_faq":<?=$faq['id']?>}' data-action="show_faq_item_form">
              <i class="fas fa-plus"></i> вопрос
            </button>
          </td>
          <td>
            <? if($faq['item'] == 'main'): ?>Для главной<? endif; ?>
            <? if($faq['item'] == 'product'): ?>Для продукта<? endif; ?>
          </td>
          <td>
            <? if(!count($faq['items'])): ?>
            <a href="#" class="delete text-danger" data-model="faq" data-id="<?=$faq['id']?>"><i class="nav-icon fas fa-trash"></i></a>
            <? endif; ?>
          </td>
        </tr>

          <? if(count($faq['items'])): ?>
            <? foreach($faq['items'] as $item): ?>
              <tr id="faq_item<?=$item['id']?>">
                <td></td>
                <td></td>
                <td>
                  <a href="#" class="ajax-action" data-action="show_faq_item_form" data-extra='{"id_faq":<?=$faq['id']?>, "id":<?=$item['id']?>}'  data-id="<?=$item['id']?>"><i class="nav-icon fas fa-edit"></i> &nbsp; <?=$item['name']?></a>
                </td>
                <td></td>
                <td></td>
                <td><a href="#" class="delete text-danger" data-model="faq_item" data-id="<?=$item['id']?>"><i class="nav-icon fas fa-trash"></i></a></td>
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


<script type="text/javascript">
  
</script>
