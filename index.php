<?php 
    session_start();
    require 'conexao.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include('components/navbar.php');?>
    <div class="container mt-4">
        <?php include('acoes/mensagem.php');?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Lista de usuário
                    <a href="acoes/usuario-create.php" class="btn btn-primary float-end">Cadastrar usuário</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data de Nascimento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = 'SELECT * FROM `usuarios`';
                                $usuarios = mysqli_query($conexao, $sql);
                                if (mysqli_num_rows( $usuarios) > 0){
                                    foreach($usuarios as $usuario){
                            ?>
                            <tr>
                                <td><?=$usuario['id_usuario']?></td>
                                <td><?=$usuario['nome']?></td>
                                <td><?=$usuario['email']?></td>
                                <td><?=date('d/m/Y',strtotime($usuario['data_nasc']))?></td>
                                <td>
                                    <a href="acoes/usuario-view.php?id=<?=$usuario['id_usuario']?>" class="btn btn-secondary btn-sm">Visualizar</a>
                                    <a href="acoes/usuario-edit.php?id=<?=$usuario['id_usuario']?>" class="btn btn-success btn-sm">Editar</a>
                                    <form action="acoes/acoes.php" method="POST" class="d-incline">
                                        <button type="submit" name="delete_usuario" value="<?=$usuario['id_usuario']?>" class="btn btn-danger btn-sm">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                                }
                            }
                                else {
                                    echo'<h5>Nenhum usuário encontrado!</h5>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>