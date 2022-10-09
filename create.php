<?php

require_once './config.php';
require_once './actions.php';
require_once './queries.php';


if (isset($_POST["nomeUsuario"]) && isset($_POST["CEP"]) && isset($_POST["ruaEnderecoNumero"]) && isset($_POST["cidadeEndereco"]) && isset($_POST["estadoEndereco"]) && isset($_POST["telefoneUsuario"]) && isset($_POST["tipoUsuario"]) && isset($_POST["login"]) && isset($_POST["senha"]))
  createUserAction($conn, $_POST["nomeUsuario"], $_POST["CEP"], $_POST["ruaEnderecoNumero"], $_POST["cidadeEndereco"], $_POST["estadoEndereco"], $_POST["telefoneUsuario"], $_POST["tipoUsuario"], $_POST["login"], $_POST["senha"]); 

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
    <form action="create.php" method="POST" name="dados">
      <div class="row">
        <div class="title">
          <h2> Cadastro usuário </h2>
        </div><br>
        <div class="col-12">
            <label class="form-label">Nome completo: </label>
            <input class="form-control" type="text" name="nomeUsuario" placeholder="Digite seu Nome" />
          </div>
        </div><br>
        <div class="row">
          <div class="col-6">
            <label class="form-label">CEP: </label>
            <input class="form-control" type="text" name="CEP" placeholder="Digite o CEP do seu endereço" />
          </div>
          <div class="col-6">
            <label class="form-label">Endereço: </label>
            <input class="form-control" type="text" name="ruaEnderecoNumero" placeholder="Digite seu Endereço" />
          </div>
        </div><br>

        <div class="row">
          <div class="col-6">
            <label class="form-label">Cidade: </label>
            <input class="form-control" type="text" name="cidadeEndereco" placeholder="Digite seu Cidade" />
          </div>
          <div class="col-6">
            <label class="form-label">Estado: </label>
            <input class="form-control" type="text" name="estadoEndereco" placeholder="Digite seu Estado" />
          </div>
        </div><br>

        <div class="row">
          <div class="col-6">
            <label class="form-label">Telefone: </label>
            <input class="form-control" type="text" name="telefoneUsuario" placeholder="Digite seu Telefone" />
          </div>
          <div class="col-6">
            <label class="form-label">Login: </label>
            <input class="form-control" type="text" name="login" placeholder="Digite seu Login" />
          </div>
        </div><br>

 	<div class="row">
          <div class="col-6">
            <label class="form-label">Senha:</label>
            <input class="form-control" type="password" name="senha" placeholder="Digite uma Senha" />
          </div>

          <div class="col-6">
            <label class="form-label">Tipo usuário: </label>
            <input class="form-control" type="text" name="tipoUsuario" placeholder="Digite C para cliente ou F para Funcionário" />
          </div>
        </div> <br>
      

      <a class="btn btn-primary" href="./index.php">Voltar</a>
      <a class="btn btn-secondary" href="./read.php">Relatório</a>
      <a href="./create.php">
        <input class="btn btn-success" type="submit" value="Salvar">
      </a>
    </form>
  </div>
</div>
