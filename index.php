<?php

require_once("config.php");

//Carrega um usuario
//$raphael = new Usuario();
//$raphael->loadbyId(10);
//echo $raphael;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Raphael","123456");
//echo $usuario;

//insere mais um usuario
//$aluno = new Usuario("aluno","@aluno");
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("peido");
//$aluno->insert();
//echo $aluno;

//alterar usuario
//$usuario = new Usuario();
//$usuario->loadById(11);
//$usuario->update("professor","peidinho");
//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(10);

$usuario->delete();

echo $usuario;

?>