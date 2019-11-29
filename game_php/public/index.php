<?php
// Filipe Arthur Silva
//Guilherme Drummond
//Henrique Dantas
//Henrique Lucas
?>
<?php require_once("../conexao/conexao.php"); ?>
<?php 
    //variável de sessão
    session_start();
	if(	isset($_POST["usuario"]) ){
		$usuario = $_POST["usuario"];
		$senha = $_POST["senha"];

		$login = "SELECT * ";
		$login .= "FROM jogadores ";
		$login .= "WHERE usuario = '{$usuario}' AND senha = '{$senha}' ";
		$acesso = mysqli_query($conexao,$login);
		if(!$acesso){
			die("Falha na consulta ao DB");
		}

		$informacao = mysqli_fetch_assoc($acesso);

		if( empty($informacao) ){
			$mensagem = "Login sem sucesso.";
		} else {
            $_SESSION["user_portal"] =$informacao["userID"];
			header("location:gaming.php");
		}
    }

?>
<!DOCTYPE html>
<html>
  <head>

  	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
  	<title>
  		Coltecano N° 1
  	</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon" />
    <!-- comentario -->
      
  </head>
  <body>
    
    <div class="container">
        <div class="form-signin" style="background: #1E90FF;">
            <h2 class="text-center">Tela de Login</h2>
            <form action="index.php" method="post">

                <input type="text" name="usuario" placeholder="Digite seu usuário" class="form-control"><br>
                
                <input type="password" name="senha" placeholder="Digite sua Senha" class="form-control"><br>
                
                <input type="submit" value="Login">
                <div class="row text-center" style="margin-top: 20px;">
                    <h4>Você Ainda não possui uma conta?</h4>
                    <a href="cadastrar.php" style="text-center">Crie Grátis</a>
                </div>
                <?php 
                if(isset($mensagem)){
                ?>
                <p><?php echo $mensagem?></p>
                <?php
                    }
                ?>

            </form>
        </div>
    </div>
    
    <pre class="autores">Made by: Filipe Arthur, Guilherme Augusto, Henrique Dantas e Henrique Lucas
    </pre>
  </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>
