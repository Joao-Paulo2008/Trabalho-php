<?php
include 'read.php';
include 'conection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabela de Dados</title>
</head>

<body>

    <div class="container col-md-6 offset-md-3">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID Usuário</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>
            <?php
            while ($usuario = mysqli_fetch_assoc($ListarSQL)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $usuario['idusuario'] ?></td>
                        <td><?php echo $usuario['nome_usuario'] ?></td>
                        <td><?php echo $usuario['sobrenome_usuario'] ?></td>
                        <td><?php echo $usuario['datas'] ?></td>
                        <td>
                            <a href="delete.php?idusuario=<?php echo $usuario['idusuario']; ?>" class="btn btn-sm btn-outline-danger">Excluir</a>
                            <a href="update.php?idusuario=<?php echo $usuario['idusuario']; ?>" class="btn btn-sm btn-outline-success">Atualizar</a>
                        </td>
                    </tr>
                </tbody>
            <?php }; ?>
        </table>

      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>