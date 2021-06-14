<?php
    include_once("beckend/function.php");
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="./css/style.css" type="text/css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

        <script src="./js/protection.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="./js/app.js"></script>

        <title>Планировщик недели</title>
    </head>

    <body>
        
        <header class="header"> <!--Шапка-->
            <h1 class="title">Планировщик рабочей недели!!!</h1>
            <div class="header_Nav">
                <div class="btn">
                  <a class="clickbtn" href="index.php">Планировщик</a>
                </div>
                    <div class="btn">
                    <a class="clickbtn" href="sotrudnic.php">Сотрудники</a>
                </div>
                <div class="btnadd">
                    <form action="" method="POST">
                        <input class="plusProject" type="button" value="[+]" data-toggle="modal" data-target="#Modal">
                    </form>
                </div>
              </div>
        </header>
 
        <section class="cont"> <!--Контейнер с двумя панелями-->
            <section class="colCont"> <!--Распологает на одной линии две панели-->
                <div class="centerios"> <!--Контейнер для кнопок и таблицы-->
                    <div class="infor">
                        <table class="table" id="tbl">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Имя</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($result as $value) {?>
                                <tr>
                                    <td>
                                        
                                    </td>
                                    <td><?=$value["name"]?></td>
                                    <td>                                  
                                        <a href="?delete=<?=$value['name'] ?>"  data-toggle="modal" class="minus" data-target="#deleteModal<?=$value['idS'] ?>">[-]</a>
                                        <a href="?edit=<?=$value['name'] ?>" class="edit" data-toggle="modal" data-target="#editModal<?=$value['idS'] ?>">Редактировать</a>
                                    </td>

                                    <!-- Модальное окно редактирования-->
                                    <div class="modal fade" id="editModal<?=$value['idS'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content shadow">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись <?=$value["name"] ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="?idS=<?=$value['idS']?>" method="POST">
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
                                        <div class="modal fade" id="deleteModal<?=$value['idS'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <form action="?idS=<?=$value['idS']?>" method="POST">
                                                            <button type="submit" name="deleteSubmit" class="btn btn-danger">Удалить</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </tr> <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Модальное окно добавления сотрудника -->
              	<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
              	  <div class="modal-dialog modal-dialog-centered" role="document">
              	    <div class="modal-content shadow">
              	      <div class="modal-header">
              	        <h5 class="modal-title">Добавить сотрудника</h5>
              	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              	          <span aria-hidden="true">&times;</span>
              	        </button>
              	      </div>

              	      <div class="modal-body">
              	      <form action="" method="POST">
              	        	<div class="form-group">
              	        		<input type="text" class="form-control" name="name" value="" placeholder="Имя">
              	        	</div>
              	      </div>

              	      <div class="modal-footer">
                	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                	        <button type="submit" name="submit" class="btn btn-primary" onClick="return sotrudnicProtect(this.form)">Добавить</button>
              	      </div>
              	  	</form>
              	    </div>
              	  </div>
              	</div>
            </section>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
