<?php

require_once './config.php';
require_once './actions.php';
require_once './queries.php';

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

<body>
  <div class="m-2"> 
    <div class="jumbotron">
      <h2 class="display-4"> Projeto Lab BD </h2>
      <hr class="my-4">
      <p>Selecione o que deseja fazer </p>
      <a class="btn btn-success btn-lg" href="./create.php"> Criar um Usuário </a>
      <a class="btn btn-primary btn-lg" href="./read.php"> Relatório </a>
    </div>
  <div>
</body>
