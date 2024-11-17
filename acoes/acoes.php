<?php

session_start();
require('../conexao/conexao.php');

if (isset($_POST['create_usuario'])) {

    // Valida e sanitiza os dados do formulário
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nasc = isset($_POST['data_nasc']) && !empty($_POST['data_nasc']) 
                 ? mysqli_real_escape_string($conexao, trim($_POST['data_nasc'])) 
                 : NULL; // Use NULL se o campo estiver vazio
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';

    // Monta a consulta SQL
    $sql = "INSERT INTO usuarios (nome, email, data_nasc, senha) 
            VALUES ('$nome', '$email', " . ($data_nasc ? "'$data_nasc'" : "NULL") . ", '$senha')";

    mysqli_query($conexao, $sql);

     // Executa a consulta
     if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem']= 'Usuario criado com sucesso!';
        header('Location:../index.php');
        exit;
    } else {
        $_SESSION['mensagem']= 'Não foi possível criar o usuário!';
        header('Location:../index.php');
    }
}

if (isset($_POST['update_usuario'])) {

    $usuario_id = mysqli_real_escape_string($conexao, $_POST['usuario_id']);
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nasc = isset($_POST['data_nasc']) && !empty($_POST['data_nasc']) 
                 ? mysqli_real_escape_string($conexao, trim($_POST['data_nasc'])) 
                 : NULL; // Use NULL se o campo estiver vazio
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    // Monta a consulta SQL inicial
    $sql = "UPDATE usuarios SET nome='$nome', email='$email', data_nasc=";

    // Define o valor para data_nasc (NULL ou valor informado)
    if ($data_nasc !== NULL) {
        $sql .= "'$data_nasc'";
    } else {
        $sql .= "NULL";
    }

    // Verifica se a senha foi preenchida e adiciona à consulta
    if (!empty($senha)) {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $sql .= ", senha='$senha_hash'";
    }

    // Adiciona a cláusula WHERE
    $sql .= " WHERE id_usuario='$usuario_id'";

    // Executa a consulta
    if (mysqli_query($conexao, $sql)) {
        if (mysqli_affected_rows($conexao) > 0) {
            $_SESSION['mensagem'] = 'Usuário atualizado com sucesso!';
        } else {
            $_SESSION['mensagem'] = 'Nenhuma alteração realizada no usuário.';
        }
    } else {
        $_SESSION['mensagem'] = 'Erro ao atualizar o usuário: ' . mysqli_error($conexao);
    }

    // Redireciona
    header('Location: ../index.php');
    exit;
}

if (isset($_POST['delete_usuario'])){
    $usuario_id = mysqli_real_escape_string($conexao,($_POST['delete_usuario']));

    $sql = "DELETE FROM usuarios WHERE id_usuario = '$usuario_id'";

    mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Usuario deletado com sucesso!';
        header('Location: ../index.php');
    } else {
        $_SESSION['mensagem'] = 'Não foi possível cadastrar!';
        header('Location: ../index.php');
    }
}

?>
