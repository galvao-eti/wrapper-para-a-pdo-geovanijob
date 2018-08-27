<?php
    require dirname(__DIR__, 1) . "/autoload.php";
    use App\Categoria;
    $categoria = new Categoria();
    
    $dados = $_POST;

    if($_POST['id']){
        $id = $dados['id'];
        $nome = $dados['categoria'];
        $categoria->update($id,$nome);
        header("location: index.php");
        
    }elseif($dados['categoria']){
        $cat = $_POST['categoria'];
        $categoria->insert($cat);
        header("location: index.php");
    }else{
        if (isset($_GET['id'])) {
            $categoria->delete($_GET['id']);
            header("location: index.php");
        }else{
            alert("Erro ao deletar!");
        }
    }
    
