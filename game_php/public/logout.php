<?php
// Filipe Arthur Silva
//Guilherme Drummond
//Henrique Dantas
//Henrique Lucas
?>
<?php 
	//Inicia sess�o
	session_start();
    unset($_SESSION["user_portal"]);
    header("location:login.php");

?>
