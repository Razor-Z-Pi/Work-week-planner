<!--CRUD-->
<?php

include "config.php";

$name = @$_POST["work"];
$day1 = @$_POST["day1"];
$day2 = @$_POST["day2"];
$day3 = @$_POST["day3"];
$day4 = @$_POST["day4"];
$day5 = @$_POST["day5"];
$day6 = @$_POST["day6"];
$day7 = @$_POST["day7"];
$editName = @$_POST["editName"];
$editday1 = @$_POST["editday1"];
$editday2 = @$_POST["editday2"];
$editday3 = @$_POST["editday3"];
$editday4 = @$_POST["editday4"];
$editday5 = @$_POST["editday5"];
$editday6 = @$_POST["editday6"];
$editday7 = @$_POST["editday7"];
$getId = @$_GET["idP"];


 // CREATE

 if (isset($_POST["submit"])) {
    $sql = ("INSERT INTO `project` (`work`,`Пон`,`Вт`,`Сре`,`Чтв`,`Пт`,`Сб`,`Вс`) VALUES(?,?,?,?,?,?,?,? )");
    $query = $pdo -> prepare($sql);
    $query -> execute([$name, $day1, $day2, $day3, $day4, $day5, $day6, $day7]);
    header("Location: ". $_SERVER['HTTP_REFERER']);
}

// READ
$sql = $pdo -> prepare(" SELECT * FROM `project` ");
$sql -> execute();
$result = $sql -> fetchAll();

// UPDATE

if (isset ($_POST["editSubmit"])) {
  $sqll = "UPDATE `project` SET `work`=?, `Пон`=?, `Вт`=?, `Сре`=?, `Чтв`=?, `Пт`=?, `Сб`=?, `Вс`=? WHERE `idP`=?";
  $querys = $pdo -> prepare($sqll);
  $querys -> execute([$editName, $editday1, $editday2, $editday3, $editday4, $editday5, $editday6, $editday7, $getId]);
  header("Location: ". $_SERVER['HTTP_REFERER']);
}

//DELETE

if (isset($_POST['deleteSubmit'])) {
    $sql = "DELETE FROM `project` WHERE `idP`=?";
    $query = $pdo -> prepare($sql);
    $query -> execute([$getId]);
    header("Location: ". $_SERVER["HTTP_REFERER"]);
}