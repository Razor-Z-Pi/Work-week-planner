<!-- Модальное окно редактирования-->
<div class="modal fade" id="editModal<?=$value['idСотрудника'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$value["name"] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$value["idСотрудника"] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="editName" value="<?=$value['name'] ?>" placeholder="Имя">
        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="editSubmit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Модальное окно удаления -->
<div class="modal fade" id="deleteModal<?=$value["idСотрудника"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись <?=$value['name'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?id=<?=$value["idСотрудника"] ?>" method="POST">
        	<button type="submit" name="deleteSubmit" class="btn btn-danger">Удалить</button>
    	  </form>
      </div>
    </div>
  </div>
</div>
