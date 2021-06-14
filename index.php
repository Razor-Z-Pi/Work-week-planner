<?php
    include_once("beckend/project.php");;
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
        <header class="header" id="header"> <!--Шапка-->
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
        
        <section class="cont">
            <section class="colCont"> 
                <div class="centerios"> 
                    <div class="infor">
                        <table class="table" id="tbl">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#Проект</th>
                                    <th scope="col">Понедельник</th>
                                    <th scope="col">Вторник</th>
                                    <th scope="col">Среда</th>
                                    <th scope="col">Четверг</th>
                                    <th scope="col">Пятница</th>
                                    <th scope="col">Суббота</th>
                                    <th scope="col">Воскресенье</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($result as $value) { ?>
                                <tr>
                                    <td><?=$value["work"]?></td>
                                    <td><?=$value["Monday"]?></td>
                                    <td><?=$value["Tuesday"]?></td>
                                    <td><?=$value["Wednesday"]?></td>
                                    <td><?=$value["Thursday"]?></td>
                                    <td><?=$value["Friday"]?></td>
                                    <td><?=$value["Saturday"]?></td>
                                    <td><?=$value["Sunday"]?></td>
                                    <td>
                                      <a href="?delete=<?=$value['work'] ?>"  data-toggle="modal" class="minus" data-target="#deleteModal<?=$value['idP'] ?>">[-]</a>
                                      <a href="?edit=<?=$value['work'] ?>" class="edit" data-toggle="modal" data-target="#editModal<?=$value['idP'] ?>">Редактировать</a>
                                    </td>


                                     <!-- Модальное окно удаления -->
                                     <div class="modal fade" id="deleteModal<?=$value['idP'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                      <div class="modal-content shadow">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Удалить запись <?=$value['work'] ?></h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена </button>
                                                          <form action="?idP=<?=$value['idP']?>" method="POST">
                                                              <button type="submit" name="deleteSubmit" class="btn btn-danger" style="margin-right: 12px;">Удалить </button>
                                                          </form>
                                                        </div>
                                                      </div>
                                              </div>
                                        </div>

                                    <!-- Модальное окно редактирования-->
                                    <div class="modal fade" id="editModal<?=$value['idP'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content shadow">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись <?=$value["work"] ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="?idP=<?=$value['idP']?>" method="POST">
                                                            <div class="form-group">

                                                                <input type="text" class="form-control" name="editName" value="<?=$value['work'] ?>" placeholder="Имя"><br>
                                                                <label for="" style="margin-left: 130px;">Количество сотрудников</label><br>

                                                                <label for="" class="TxT" style="margin-right: 60px;">Понедельник:</label>

                                                                <input type="number" min="1" max="3" style="margin-right: 30px;">

                                                                <select name="editday1" сlass="SunnyDay">
                                                                  <option value="<?php echo $value["Monday"]?>"><?php echo $value["Monday"]?></option>
                                                                  <?php include_once("beckend/function.php");?>
                                                                  <?php foreach ($result as $start) {?>
                                                                    <option value="<?php echo $start["name"]?>"><?php echo $start["name"]?></option>
                                                                  <?php }?>
                                                                </select>
                                                                <br> 

                                                                <label for="" class="TxT" style="margin-right: 106px;">Вторник:</label>
                                                                <select name="editday2" сlass="SunnyDay">
                                                                  <option value="<?php echo $value["Tuesday"]?>"><?php echo $value["Tuesday"]?></option>
                                                                  <?php include_once("beckend/function.php");?>
                                                                  <?php foreach ($result as $start) {?>
                                                                  <option value="<?php echo $start["name"]?>"><?php echo $start["name"]?></option>
                                                                  <?php }?>
                                                                </select> 
                                                                <br>
                                                                
                                                                <label for="" class="TxT" style="margin-right: 127px;">Среда:</label>
                                                                <select name="editday3" сlass="SunnyDay">
                                                                  <option value="<?php echo $value["Wednesday"]?>"><?php echo $value["Wednesday"]?></option>
                                                                  <?php include_once("beckend/function.php");?>
                                                                  <?php foreach ($result as $start) {?>
                                                                  <option value="<?php echo $start["name"]?>"><?php echo $start["name"]?></option>
                                                                  <?php }?>
                                                                </select> 
                                                                <br>

                                                                <label for="" class="TxT" style="margin-right: 111px;">Четверг:</label>
                                                                <select name="editday4" сlass="SunnyDay">
                                                                  <option value="<?php echo $value["Thursday"]?>"><?php echo $value["Thursday"]?></option>
                                                                  <?php include_once("beckend/function.php");?>
                                                                  <?php foreach ($result as $start) {?>
                                                                  <option value="<?php echo $start["name"]?>"><?php echo $start["name"]?></option>
                                                                  <?php }?>
                                                                </select> 
                                                                <br>

                                                                <label for=""  class="TxT" style="margin-right: 105px;">Пятница:</label>
                                                                <select name="editday5" сlass="SunnyDay">
                                                                  <option value="<?php echo $value["Friday"]?>"><?php echo $value["Friday"]?></option>
                                                                  <?php include_once("beckend/function.php");?>
                                                                  <?php foreach ($result as $start) {?>
                                                                  <option value="<?php echo $start["name"]?>"><?php echo $start["name"]?></option>
                                                                  <?php }?>
                                                                </select> 
                                                                <br>

                                                                <label for="" class="TxT" style="margin-right: 110px;">Суббота:</label>
                                                                <select name="editday6" сlass="SunnyDay">
                                                                  <option value="<?php echo $value["Saturday"]?>"><?php echo $value["Saturday"]?></option>
                                                                  <?php include_once("beckend/function.php");?>
                                                                  <?php foreach ($result as $start) {?>
                                                                  <option value="<?php echo $start["name"]?>"><?php echo $start["name"]?></option>
                                                                  <?php }?>
                                                                </select> 
                                                                <br>

                                                                <label for="" class="TxT" style="margin-right: 70px;">Воскресенье:</label>
                                                                <select name="editday7" сlass="SunnyDay">
                                                                  <option value="<?php echo $value["Sunday"]?>"><?php echo $value["Sunday"]?></option>
                                                                  <?php include_once("beckend/function.php");?>
                                                                  <?php foreach ($result as $start) {?>
                                                                  <option value="<?php echo $start["name"]?>"><?php echo $start["name"]?></option>
                                                                  <?php }?>
                                                                </select> 

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="editSubmit" class="btn btn-primary">Обновить</button>
                                                            </div>
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
                        <h5 class="modal-title">Добавить проект</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <div class="modal-body">
                      <form action="" method="POST">
                          <div class="form-group">
                            <input type="text" class="form-control" id="addTxT" name="work" value="" placeholder="Проект">
                            <label for="" class="TxT" style="margin-right: 60px;">Понедельник</label>
                            <select name="day1" id="SunnyDay1">
                              <?php include_once("beckend/function.php");?>
                              <option value=""></option>
                              <?php foreach ($result as $value) {?>
                              <option value="<?php echo $value["name"]?>"><?php echo $value["name"]?></option>
                              <?php }?>
                            </select> 
                            <br>

                            <label for="" class="TxT" style="margin-right: 106px;">Вторник</label>
                            <select name="day2" id="SunnyDay2">
                              <?php include_once("beckend/function.php");?>
                              <option value=""></option>
                              <?php foreach ($result as $value) {?>
                              <option value="<?php echo $value["name"]?>"><?php echo $value["name"]?></option>
                              <?php }?>
                            </select> 
                            <br>
                            
                            <label for="" class="TxT" style="margin-right: 127px;">Среда</label>
                            <select name="day3" id="SunnyDay3">
                              <?php include_once("beckend/function.php");?>
                              <option value=""></option>
                              <?php foreach ($result as $value) {?>
                              <option value="<?php echo $value["name"]?>"><?php echo $value["name"]?></option>
                              <?php }?>
                            </select> 
                            <br>

                            <label for="" class="TxT" style="margin-right: 111px;">Четверг</label>
                            <select name="day4" id="SunnyDay4">
                              <?php include_once("beckend/function.php");?>
                              <option value=""></option>
                              <?php foreach ($result as $value) {?>
                              <option value="<?php echo $value["name"]?>"><?php echo $value["name"]?></option>
                              <?php }?>
                            </select> 
                            <br>

                            <label for="" class="TxT" style="margin-right: 105px;">Пятница</label>
                            <select name="day5" id="SunnyDay5">
                              <?php include_once("beckend/function.php");?>
                              <option value=""></option>
                              <?php foreach ($result as $value) {?>
                              <option value="<?php echo $value["name"]?>"><?php echo $value["name"]?></option>
                              <?php }?>
                            </select> 
                            <br>

                            <label for="" class="TxT" style="margin-right: 110px;">Суббота</label>
                            <select name="day6" id="SunnyDay6">
                              <?php include_once("beckend/function.php");?>
                              <option value=""></option>
                              <?php foreach ($result as $value) {?>
                              <option value="<?php echo $value["name"]?>"><?php echo $value["name"]?></option>
                              <?php }?>
                            </select> 
                            <br>

                            <label for="" class="TxT" style="margin-right: 70px;">Воскресенье</label>
                            <select name="day7" id="SunnyDay7">
                              <?php include_once("beckend/function.php");?>
                                <option value=""></option>
                              <?php foreach ($result as $value) {?>
                                <option value="<?php echo $value["name"]?>"><?php echo $value["name"]?></option>
                              <?php }?>
                            </select> 
                          </div>
                      </div>

                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                          <button type="submit" name="submit" class="btn btn-primary" onClick="return Protection(this.form)" >Добавить</button>
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
