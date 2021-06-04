<?php
//Подключение базы данных и её содержимое
$host = "localhost";
$db = "scheduler";
$profer = "root";
$password = "";
try
{
  $pdo = new PDO("mysql:dbname=$db; host=$host", $profer, $password);
}
catch (PDOException $e)
{
   die($e -> getMessage());
}
?>
