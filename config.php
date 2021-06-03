<?php
//Подключение базы данных и её содержимое
try
{
  $pdo = new PDO("mysql:dbname=scheduler; host=localhost", "root", "");
}
catch (PDOException $e)
{
   die($e -> getMessage());
}
?>
