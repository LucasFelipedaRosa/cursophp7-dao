<?php
	require_once("config.php");

	//carrega 1 usuario
	//$usuario= new Usuario();
	//$usuario->loadById(3); 
	//echo $usuario;

	//carrega uma lista de usuarios]
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//carrega uma lista de usuarios buscando pelo login
	//$search = Usuario::search("Lu");
	//echo json_encode($search);

	//autentificação de login
	//$usuario = new Usuario();
	//$usuario->login("Lucasw","12345");
	//echo $usuario;

	//criando um novo usuario no banco de dados
	//$usuario = new Usuario("Julia","julia072");
	//$usuario->insert();
	//echo $usuario;

	//alterar um usuario
	//$usuario = new Usuario();
	//$usuario->loadById(11);
	//$usuario->update("julia123","lucas123");
	//echo $usuario;

	$usuario = new Usuario();

	$usuario->loadById(10);
	$usuario->delete();

	echo $usuario;
?>
