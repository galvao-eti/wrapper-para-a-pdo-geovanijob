<?php
    require dirname(__DIR__, 1) . "/autoload.php";

    use App\Categoria;
    $categoria = new Categoria();
   
    $resultado = $categoria->getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body> 
<h1>Categorias</h1>
<a href="adicionarCategoria.php">Adicionar Categoria</a>

<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td colspan="2">Opção</td>
    </tr>
    <?php foreach ($resultado as $valor) { ?>
    <tr>
         <td><?php echo $valor['id'] ?></td>
         <td><?php echo $valor['nome'] ?></td>
         <td><a href="editarCategoria.php?id=<?php echo $valor['id'] ?>">Editar</a></td>
        <td><a href="salvar.php?id=<?php echo $valor['id'] ?>">Deletar</a></td>
    </tr>
    <?php } ?>
</table>    
</body>
</html>