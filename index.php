<?php

require_once("config.php");

//Carrega um usuario
/*
$root = new Usuario();

$root->loadById(8);

echo $root;
*/


//carrega lista usuario
/*
$lista = Usuario::getList();

echo json_encode($lista);
*/

//Carrega lista pelo LOGIN
/*
$search = Usuario::search("br");

echo json_encode($search);
*/

//Carrega um usuário usando o login ou senha 
/*
$usuario = new Usuario();
$usuario->login("matheusd3", "Psw@1308");
echo $usuario;
*/
//Inset usuario
/*
$aluno = new Usuario("aluno2", "@luno22");

$aluno->insert();

echo $aluno;
*/
//Alterar um User
/*
$usuario = new Usuario();

$usuario->loadById(14);

$usuario->update("professor", "PRogeee");

echo $usuario;
*/
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->delete();
echo $usuario;

?>