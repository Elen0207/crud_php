<?php

function findUserDb($conn, $login) {
    $login = mysqli_real_escape_string($conn,$login);

    $sql = "SELECT * FROM TableUsuario  WHERE login = ?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
        exit('SQL error');

    mysqli_stmt_bind_param($stmt, 's', $login);
    mysqli_stmt_execute($stmt);

    $user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

    mysqli_close($conn);
    return $user;
}

function createUserDb($conn, $nome, $cep, $endereco, $cidade, $estado, $telefone, $tipoUsuario, $login, $senha) {
    $nome = mysqli_real_escape_string($conn, $nome);
    $cep =  intval(mysqli_real_escape_string($conn,  $cep));
    $endereco = mysqli_real_escape_string($conn,  $endereco);
    $cidade = mysqli_real_escape_string($conn, $cidade);
    $estado = mysqli_real_escape_string($conn,  $estado);
    $telefone = mysqli_real_escape_string($conn,  $telefone);
    $tipoUsuario = mysqli_real_escape_string($conn, $tipoUsuario);
    $login = mysqli_real_escape_string($conn, $login);
    $senha = mysqli_real_escape_string($conn,  $telefone);

    if($nome && $cep && $endereco && $cidade && $estado && $telefone && $tipoUsuario && $login && $senha) {
        $sql = "call PC_Insert_Usuario( ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
            exit('SQL error');

        mysqli_stmt_bind_param($stmt, 'sisssssss', $nome, $cep, $endereco, $cidade, $estado, $telefone, $tipoUsuario, $login, $senha);
        mysqli_stmt_execute($stmt);
        mysqli_close($conn);
        return true;
    }
}

function readUserDb($conn) {
    $users = [];

    $sql = "SELECT * FROM TableUsuario";
    $result = mysqli_query($conn, $sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0)
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
    return $users;
}

function updateUserDb($conn, $nome, $cep, $endereco, $cidade, $estado, $telefone, $tipoUsuario, $login, $senha) {
    $nome = mysqli_real_escape_string($conn, $nome);
    $cep =  intval(mysqli_real_escape_string($conn,  $cep));
    $endereco = mysqli_real_escape_string($conn,  $endereco);
    $cidade = mysqli_real_escape_string($conn, $cidade);
    $estado = mysqli_real_escape_string($conn,  $estado);
    $telefone = mysqli_real_escape_string($conn,  $telefone);
    $tipoUsuario = mysqli_real_escape_string($conn, $tipoUsuario);
    $login = mysqli_real_escape_string($conn, $login);
    $senha = mysqli_real_escape_string($conn,  $telefone);
    
    if($nome && $cep && $endereco && $cidade && $estado && $telefone && $tipoUsuario && $login && $senha) {
        $sql = "UPDATE TableUsuario SET  nomeUsuario = ?, CEP = ?, ruaEnderecoNumero = ?, cidadeEndereco = ?, estadoEndereco = ?, telefoneUsuario = ?,  tipoUsuario = ?, senha = ? WHERE login = ?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
            exit('SQL error');
        
        mysqli_stmt_bind_param($stmt, 'sisssssss', $nome, $cep, $endereco, $cidade, $estado, $telefone, $tipoUsuario, $senha, $login);
        mysqli_stmt_execute($stmt);
        mysqli_close($conn);
        return true;
    }
}

function deleteUserDb($conn, $login) {
    $login = mysqli_real_escape_string($conn, $login);

    if($login) {
        $sql = "DELETE FROM TableUsuario WHERE login = ?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
            exit('SQL error');

        mysqli_stmt_bind_param($stmt, 's', $login);
        mysqli_stmt_execute($stmt);
        return true;
    }
}
