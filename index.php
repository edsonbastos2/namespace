<?php 
	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();
	$cad->setNome("Edson Bastos");
	$cad->setEmail("edsonbastos2@hotmail.com");
	$cad->setSenha(123456);

	$cad->registrarVenda();

 ?>