<?php

require_once './config.php';
require_once './actions.php';
require_once './queries.php';

if(isset($_POST['login']))
    deleteUserAction($conn, $_POST['login']);

?>

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Chamando Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Projeto Lab BD</title>
</head>
<div class="container">
    <div class="row">
        <div class="title">
          <h2> Exclusão de usuário </h2>
        </div><br>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="delete.php" method="POST">
                <label>Digite o login do usuário que deseja excluir: </label><br>
                <input class="form-control" type="text" name="login" placeholder="Digite seu login" value="<?=$_GET['login']?>" required/><br>
                <a href="./read.php">
                  <input class="btn btn-danger" type="submit" value="Excluir">
                </a>
                
                
                <a class="btn btn-primary" href="./index.php">Voltar</a>
                <a class="btn btn-success" href="./create.php">Criar Novo</a>
                <a class="btn btn-secondary" href="./read.php">Relatório</a>
            </form>
        </div>
    </div>
</div>
