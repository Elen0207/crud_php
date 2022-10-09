<?php

require_once './config.php';
require_once './actions.php';
require_once './queries.php';


$users = readUserAction($conn);

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
    <br>
    <div class="row">
        <div class="col-6">
            <h2> Relatório de usuário </h2>
        </div>
        <div class="col-6">
            <a class="btn btn-primary" href="./index.php">Voltar</a>
            <a class="btn btn-success text-white" href="./create.php">Criar Novo</a>
        </div>
    </div><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nome Completo</th>
                <th scope="col">CEP</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Telefone</th>
		        <th scope="col">Login</th>
                <th scope="col">Tipo Usuario</th>
		        <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $row): ?>
                <tr>
                    <th scope="row"><?=htmlspecialchars($row['nomeUsuario'])?>
                        <td><?=htmlspecialchars($row['CEP'])?></td>
                        <td><?=htmlspecialchars($row['ruaEnderecoNumero'])?></td>
                        <td><?=htmlspecialchars($row['cidadeEndereco'])?></td>
                        <td><?=htmlspecialchars($row['estadoEndereco'])?></td>
                        <td><?=htmlspecialchars($row['telefoneUsuario'])?></td>
                        <td><?=htmlspecialchars($row['login'])?></td>
                        <td><?=htmlspecialchars($row['tipoUsuario'])?></td>
                        <td>
                            <a class="btn btn-warning text-white" href="./edit.php?login=<?=$row['login']?>">Editar</a>

                            <a class="btn btn-danger text-white" href="./delete.php?login=<?=$row['login']?>">Excluir</a>
                        </td>
                    </th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
