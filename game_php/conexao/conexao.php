<?php
	//Abrindo Conex�o
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "coltecano1";
	$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
    mysqli_set_charset($conexao, "utf8");
	
	//Testando Conex�o

	if ( mysqli_connect_errno() ) {
		die("Conex�o falhou".mysqli_connect_errno());	
	}

?>