<?php
// Filipe Arthur Silva
//Guilherme Drummond
//Henrique Dantas
//Henrique Lucas
?>
<?php require_once("../conexao/conexao.php"); ?>
<?php 
    //vari�vel de sess�o
    session_start();
	if(	isset($_POST["usuario"]) ){
		$usuario = $_POST["usuario"];
		$senha = $_POST["senha"];

		$login = "SELECT * ";
		$login .= "FROM user ";
		$login .= "WHERE usuario = '{$usuario}' AND senha = '{$senha}' ";
		$acesso = mysqli_query($conexao,$login);
		if(!$acesso){
			die("Falha na consulta ao DB");
		}

		$informacao = mysqli_fetch_assoc($acesso);

		if( empty($informacao) ){
			$mensagem = "Login sem sucesso.";
		} else {
            $_SESSION["user_portal"] =$informacao["user_ID"];
			header("location:gaming.php");
		}
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
		<link href="_css/login.css" rel="stylesheet">
    </head>

    <body>
		
        <main>

			<div id="janela_login">
				 <form action="login.php" method="post">
					<h2>Tela de Login</h2>
					<input type="text" name="usuario" placeholder="Usuario">
					<input type="password" name="senha" placeholder="Senha">
					<input type="submit" value="Login">
				 
				 <?php 
					if(isset($mensagem)){
						
					
				 ?>
					<p><?php echo $mensagem?></p>
				 <?php 
					}
				 ?>
				 
				 </form>
			</div>
			
        </main>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>