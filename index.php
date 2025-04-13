<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./css/global.css">
  <link rel="stylesheet" type="text/css" href="./css/home.css">
  <title>TCC</title>
</head>

<style type="text/css">

  header{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    width: 100%;
    height: 200px;
    margin-bottom: 100px;

  }

  .logo img{
    width: 150px;
    height: 150px;
    border-radius: 50%;
  }

  .links a{
    text-decoration: none;
    color: black;
    padding: 20px;
    font-size: 25px;
    
    
  }

  .container {
    display: flex;
    flex-direction: column;
    align-items: center; /* Centraliza no eixo horizontal */
    justify-content: center; /* Centraliza no eixo vertical */
    max-width: 80%;
    margin: auto;
}


</style>
<body>

  <header>
    <div class="logo">
      <img src="./assets/ayao-suzuki-logo.png">
    </div>
    <div class="links">
      <a href="?page=home">Home</a>
      <a href="?page=produto">Cadastrar Produto</a>
      <a href="?page=funcionario">Cadastrar Funcionário</a>
    </div>
  </header>


  <div class="container">
     <?php 
            include("config.php");
        switch (@$_REQUEST["page"]) {
          case "home":
            include("home.php");
            break;
          case "produto":
            include("cadastrarProduto.php");
            break;
          case "funcionario":
            include("cadastrarFuncionario.php");
            break;
            default:
            print("<h1>Bem Vindos!</h1>");
        }

     ?>
  </div>

</body>
</html>