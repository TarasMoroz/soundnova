
<div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="modal-add-photo">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Добавление фото</h4>
      </div>
      <div class="modal-body">
        <iframe id="bulletin-frame" name="bulletin-frame" style="display:none;"></iframe>

          <p>Допустимый формат JPG!</p>

        <? $action_url = "upload/save_photo/" ?>

        <form method="post" action="<?php echo base_url($action_url); ?>" target="bulletin-frame" enctype="multipart/form-data">

        <input type="file" name="userfile" size="20"/>
        <input type="hidden" name="folder" value="<?=$folder?>" />

        <br/>

        <input class="btn btn-success" type="submit" value="Сохранить" />

        </form>

      </div>
    </div>
  </div>
</div>

<table class="table table-hover" id="bulletin">
    <thead>
      <tr>
        <th width="60%">
          <button class="btn btn-default btn-big pull-left" type="button" data-toggle="modal" data-target="#modal-add-photo">
            <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Загрузить Фото
          </button>

          <button class="btn btn-default btn-big btn-refresh ajax-action" data-action="show_photos" data-folder="<?=$folder?>" type="button" style="margin-left:10px;">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
          </button>

          &nbsp;&nbsp;&nbsp;<?=$folder?>
        </th>
        <th width="40%">
        </th>
      </tr>
    </thead>
    <tbody>

    <? $i=0; if(!empty($iterator)): foreach($iterator as $file): if(substr($file, -4) == ".jpg"): ?>
      <tr>

        <td>
          <img src="<?=$file?>?<?=rand(0,100)?>" width="300">
        </td>

        <td>
          <button class="btn btn-default btn-big" type="button" data-toggle="modal" data-target="#modal-<?=$i?>">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
          </button>

          <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="modal-<?=$i?>">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Удалить фото?</h4>
                </div>
                <div class="modal-body">
                  <img src="<?=$file?>?<?=rand(0,100)?>" width="200"><br><br>
                  <input class="btn btn-danger deletePhoto" data-file="<?=$file?>" type="submit" value="Удалить" />
                </div>
              </div>
            </div>
          </div>
        </td>

      </tr>
    <? $i++; endif; endforeach; endif; ?>
    </tbody>
</table>

    <script type="text/javascript">

    function onSuccess(d) {
      $('.close').trigger('click')
      setTimeout(function(){ $('.btn-refresh').trigger('click'); }, 500);
    }

    function onError(d) {
      alert('error: '+ d);
    }

    $(".deletePhoto").click(function(){

      var self = $(this);
      $('.close').trigger('click'); // closes modal window

      var filepath = self.data("file"); // getting id value

      $.ajax({
        url: '/admin513/delete_photo',
        type: 'POST',
        data: {file: filepath},
        success: function(data, textStatus, XMLHttpRequest){
          setTimeout(function(){ $('.btn-refresh').trigger('click'); }, 500);
        }
      });
    });

    </script>
