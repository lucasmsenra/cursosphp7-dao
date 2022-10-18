<?php 

require_once("config.php");

$usuario1 = new Usuario();

$usuario1->loadById(1);

echo $usuario1;







/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
?>