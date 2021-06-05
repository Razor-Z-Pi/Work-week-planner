<!--CRUD-->
<?php
include "config.php";

$name = @$_POST["name"];
$editNames = @$_POST["editName"];
$Id = @$_GET["idS"];

 // CREATE

if (isset($_POST["submit"])) {
    $sql = ("INSERT INTO `employee`(`name`) VALUES(?)");
    $query = $pdo -> prepare($sql);
    $query -> execute([$name]);
    header("Location: ". $_SERVER['HTTP_REFERER']);
}

// READ

$sql = $pdo -> prepare(" SELECT * FROM employee");
$sql -> execute();
$result = $sql -> fetchAll();

// UPDATE

if (isset ($_POST["editSubmit"])) {
  $sqll = "UPDATE `employee` SET `name`=? WHERE `idS`=?";
  $querys = $pdo -> prepare($sqll);
  $querys -> execute([$editNames, $Id]);
  header("Location: ". $_SERVER['HTTP_REFERER']);
}

//DELETE

if (isset ($_POST["deleteSubmit"])) {
  $sql = "DELETE FROM employee WHERE idS=?";
	$query = $pdo->prepare($sql);
	$query->execute([$Id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}