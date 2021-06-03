
<!--CRUD-->

<?php
include "config.php";

 // CREATE

 if (isset($_POST["submit"])) {
   $name = $_POST["work"];

    $sql = ("INSERT INTO `employee`(`work`) VALUES(?)");
    $query = $pdo -> prepare($sql);
    $query -> execute([$name]);
    $success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
}

// READ

$sql = $pdo -> prepare(" SELECT * FROM `project` ");
$sql -> execute();
$result = $sql -> fetchAll();

// UPDATE

if (isset ($_POST["editSubmit"])) {
  $editName = $_POST["editName"];
  $getId = $_GET["idСотрудника"];

  $sqll = "UPDATE employee SET work=? WHERE idСотрудника=?";
  $querys = $pdo -> prepare($sqll);
  $querys = execute([$editName, $getId]);
  header("Location: ". $_SERVER['HTTP_REFERER']);
}

//DELETE

if (isset($_POST['deleteSubmit'])) {
    $sql = "DELETE FROM `employee` WHERE idСотрудника=?";
    $query = $pdo -> prepare($sql);
    $query = execute([$get_id]);
    header("Location: ". $_SERVER["HTTP REFERER"]);
}
?>
