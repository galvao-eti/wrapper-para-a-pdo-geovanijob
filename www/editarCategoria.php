<?php
    require dirname(__DIR__, 1) . "/autoload.php";
    use App\Categoria;
    $categoria = new Categoria();
    $valor = $categoria->getOne($_GET['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="salvar.php" method="post">
    <label for="id">Id:</label>
    <input type="text" name="id" value="<?php echo $valor['id']; ?>" readonly>
    <label for="categoria">Categoria:</label>
    <input type="text" name="categoria" value="<?php echo $valor['nome']; ?>">
    <button type="submit">Salvar</button>
</form>    
</body>
</html>