<?php

require_once './config.php';
require_once './actions.php';
require_once './queries.php';


if (isset($_POST["nomeUsuario"]) && isset($_POST["CEP"]) && isset($_POST["ruaEnderecoNumero"]) && isset($_POST["cidadeEndereco"]) && isset($_POST["estadoEndereco"]) && isset($_POST["telefoneUsuario"]) && isset($_POST["tipoUsuario"]) && isset($_POST["login"]) && isset($_POST["senha"]))
  updateUserAction($conn, $_POST["nomeUsuario"], $_POST["CEP"], $_POST["ruaEnderecoNumero"], $_POST["cidadeEndereco"], $_POST["estadoEndereco"], $_POST["telefoneUsuario"], $_POST["tipoUsuario"], $_POST["login"], $_POST["senha"]);

$user = isset($_GET['login']) ? findUserAction($conn, $_GET['login']) : null;

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

  <div class="form-group">
    <form action="edit.php" method="POST" name="dados">
      <div class="row">
      <?php if($user): ?>
        <br><br>
        <div class="row">
          <div class="col-6">
              <h2> Editar usuário </h2>
          </div>
          <div class="col-6"> <br>
            <a href="./edit.php">
              <input class="btn btn-warning" type="submit" value="Editar">
            </a>
          </div>
        </div><br>
        
        <div class="col-12">
            <label class="form-label">Nome completo: </label>
            <input class="form-control" type="text" name="nomeUsuario" placeholder="Digite seu Nome" value="<?=htmlspecialchars($user['nomeUsuario'])?>" required/>
          </div>
        </div><br>
        <div class="row">
          <div class="col-6">
            <label class="form-label">CEP: </label>
            <input class="form-control" type="text" name="CEP" placeholder="Digite o CEP do seu endereço" value="<?=htmlspecialchars($user['CEP'])?>" required/>
          </div>
          <div class="col-6">
            <label class="form-label">Endereço: </label>
            <input class="form-control" type="text" name="ruaEnderecoNumero" placeholder="Digite seu Endereço" value="<?=htmlspecialchars($user['ruaEnderecoNumero'])?>" required/>
          </div>
        </div><br>

        <div class="row">
          <div class="col-6">
            <label class="form-label">Cidade: </label>
            <input class="form-control" type="text" name="cidadeEndereco" placeholder="Digite seu Cidade" value="<?=htmlspecialchars($user['cidadeEndereco'])?>" required/>
          </div>
          <div class="col-6">
            <label class="form-label">Estado: </label>
            <input class="form-control" type="text" name="estadoEndereco" placeholder="Digite seu Estado" value="<?=htmlspecialchars($user['estadoEndereco'])?>" required/>
          </div>
        </div><br>

        <div class="row">
          <div class="col-6">
            <label class="form-label">Telefone: </label>
            <input class="form-control" type="text" name="telefoneUsuario" placeholder="Digite seu Telefone" value="<?=htmlspecialchars($user['telefoneUsuario'])?>" required/>
          </div>
          <div class="col-6">
            <label class="form-label">Login: </label>
            <input class="form-control" type="text" name="login" placeholder="Digite seu Login" value="<?=htmlspecialchars($user['login'])?>" required/>
          </div>
        </div><br>

        <div class="row">
          <div class="col-6">
            <label class="form-label">Senha:</label>
            <input class="form-control" type="password" name="senha" placeholder="Digite uma Senha" value="<?=htmlspecialchars($user['senha'])?>" required/>
          </div>

          <div class="col-6">
            <label class="form-label">Tipo usuário: </label>
            <input class="form-control" type="text" name="tipoUsuario" placeholder="Digite seu Login" value="<?=htmlspecialchars($user['tipoUsuario'])?>" required/>
          </div>
        </div> <br>

    <?php endif; ?>
      <div class="m-2" > 
        <a class="btn btn-success" href="./create.php">Criar Novo</a>
        <a class="btn btn-secondary" href="./read.php">Relatório</a>
        <a class="btn btn-primary" href="./index.php">Voltar</a>
      </div>
    </form>
  </div>

</div>
