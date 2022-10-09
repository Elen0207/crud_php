<?php

require_once './queries.php';

function findUserAction($conn, $login) {
    return findUserDb($conn, $login);
}

function readUserAction($conn) {
    return readUserDb($conn);
}

function createUserAction($conn, $nome, $cep, $endereco, $cidade, $estado, $telefone, $tipoUsuario, $login, $senha) {
    $createUserDb = createUserDb($conn,  $nome, $cep, $endereco, $cidade, $estado, $telefone, $tipoUsuario, $login, $senha);
    $message = $createUserDb == 1 ? '<span class="text-success">Cadastro realizado com sucesso!</span>' :  '<span class="text-error">Ocorreu um erro!</span>';
    return $message;
}

function updateUserAction($conn,  $nome, $cep, $endereco, $cidade, $estado, $telefone, $tipoUsuario, $login, $senha) {
    $updateUserDb = updateUserDb($conn, $nome, $cep, $endereco, $cidade, $estado, $telefone, $tipoUsuario, $login, $senha);
    $message = $updateUserDb == 1 ? '<span class="text-success">Atualização realizada com sucesso!</span>' :  '<span class="text-error">Ocorreu um erro!</span>';
    return $message;
}

function deleteUserAction($conn, $login) {
    $deleteUserDb = deleteUserDb($conn, $login);
    $message = $deleteUserDb == 1 ? '<span class="text-success">Exclusão realizada com sucesso!</span>' :  '<span class="text-error">Ocorreu um erro!</span>';
    return $message;
}