<?php 

require_once("config.php");

//Carrega um usuário
/* $usuario1 = new Usuario();
$usuario1->loadById(1);
echo $usuario1; */

//Carrega uma lista de usuários
/* $lista = Usuario::getList();
echo json_encode($lista); */

//Carrega uma lista de usuários buscando pelo login
/*$search = Usuario::search("jo");
echo json_encode($search);  */

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose", "1234567890");
echo $usuario;





/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
?>