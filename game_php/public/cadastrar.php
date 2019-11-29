<?php
// Filipe Arthur Silva
//Guilherme Drummond
//Henrique Dantas
//Henrique Lucas
?>
<?php require_once("../conexao/conexao.php"); ?>
<?php
    //insere monitor
    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        
        $inserir = "INSERT INTO jogadores ";
        $inserir .= "(nome, usuario, senha) ";
        $inserir .="VALUES ";
        $inserir .="('$nome','$usuario','$senha')";
        
        $op_inserir = mysqli_query($conexao,$inserir);
        if(!$op_inserir){
            die("Nao inseriu");
        } else {
            header("location:index.php");  
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

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon" />
    <!-- comentario -->
      
  </head>
  <body>
    
    <div class="container">
        <div class="form-signin" style="background: #1E90FF;">
            <h2 class="text-center">Tela de Registro</h2>
            <form action="cadastrar.php" method="post">
                
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Digite seu nome" class="form-control" required><br>
                
                <label>Usuario:</label>
                <input type="text" name="usuario" placeholder="Digite seu usuário" class="form-control" required><br>
                
                <label>Senha:</label>
                <input type="password" name="senha" placeholder="Digite sua Senha" class="form-control" required><br>
                
                <input type="submit" value="Registrar">
                <div class="row text-center" style="margin-top: 20px;">
                   
                </div>
            </form>
        </div>
    </div>
  </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>
