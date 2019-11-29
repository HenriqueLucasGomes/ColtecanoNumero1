<?php
	//Abrindo Conexão
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "coltecano1";
	$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
    mysqli_set_charset($conexao, "utf8");
	
	//Testando Conexão

	if ( mysqli_connect_errno() ) {
		die("Conexão falhou".mysqli_connect_errno());	
	}

?>