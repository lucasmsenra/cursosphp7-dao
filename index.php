<?php 

require_once("config.php");


/* Primeiro código
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

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
/*$usuario = new Usuario();
$usuario->login("jose", "1234567890");
echo $usuario; */

//CRIANDO UM NOVO USUÁRIO
/*Sem método construtor no final
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@alun0"); */

//Com método construtor
/* $aluno = new Usuario("aluno", "@alun0");
$aluno->insert();
echo $aluno; */

//Alterar um usuário
/*$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("professor", "@1234#");
echo $usuario; */

$usuario = new Usuario();
$usuario->loadById(3);
$usuario->delete();
echo $usuario;



?>