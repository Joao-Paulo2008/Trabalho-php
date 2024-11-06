<?php

include 'conection.php';

if(isset($_GET['idusuario'])){
    $id = $_GET['idusuario'];
    $sql = mysqli_query($conectionBD, "SELECT * FROM usuario WHERE idusuario=$id");
    $count = (is_array($sql)) ? count($sql) :1;
    if($count){
        $n = mysqli_fetch_array($sql);
        $nome = $n['nome_usuario'];
        $sobrenome = $n['sobrenome_usuario'];
    }
}

if(isset($_POST['editar'])){
$id = $_GET["idusuario"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];

$queryUpdate = "UPDATE usuario SET nome_usuario = '$nome', sobrenome_usuario = '$sobrenome' WHERE idusuario = $id";

$consulta = mysqli_query($conectionBD, $queryUpdate);

header('location: index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crud PHP</title>
</head>
<body>
    <div class="container col-md-6 offset-md-3">
        <h1>Formulário de Autalização - PHP com MySQL</h1>

        <form action="save.php" method="post">
            <div class="row">
                <div class="col">
                <input type="text" name="nome" id="" class="form-control" placeholder="Digite o seu Nome aqui: " value="<?php echo $nome?>">
                </div>
                <div class="col">
                <input type="text" name="sobrenome" id=""  class="form-control" placeholder="Digite seu sobrenome aqui: " value = "<?php echo $sobrenome?>">
                </div> 
                <div class="col">
                <input type="date"  class="form-control" name="date" placeholder="data" id="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <br>
                <button type="submit" class="btn btn-outline-secondary">Salvar</button>
                </div>
            </div>
        </form>
        <br>
        <a href="index.php" class="btn btn-outline-warning">Página Inicial</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>