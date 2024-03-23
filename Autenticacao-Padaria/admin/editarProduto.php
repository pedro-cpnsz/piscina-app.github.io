<?php

if(isset($_POST["titulo"]) && !empty($_POST["titulo"]) &&
isset($_POST["categoria"]) && !empty($_POST["categoria"]) &&
isset($_POST["valor"]) && !empty($_POST["valor"]) &&
isset($_POST["quantidade"]) && !empty($_POST["quantidade"]) &&
isset($_POST["peso"]) && !empty($_POST["peso"]) &&
isset($_POST["id"]) && !empty($_POST["id"])) {
    $titulo = $_POST["titulo"];
    $categoria = $_POST["categoria"];
    $valor = $_POST["valor"];
    $quantidade = $_POST["quantidade"];
    $peso = $_POST["peso"];
    $id = $_POST["id"];
    $dataCadastro = date("Y-m-d H:m:s");

    $connectDB = new Mysqli("localhost", "root", "", "padariacreber");

    $sqlUsuarios = "UPDATE produtos SET 
    titulo = '".$titulo."', 
    categoria = '".$categoria."', 
    valor = '".$valor."', 
    quantidade = '".$quantidade."', 
    peso = '".$peso."', 
    dataCadastro = '".$dataCadastro."' 
    WHERE id = '".$id."'";
    $resultado = $connectDB -> query("$sqlUsuarios");
    if($resultado) {
        echo "Cadastro atualizado com sucesso!";
        header("location: /Autenticacao-Padaria/admin/index.php?pagina=listarProduto.php&isAuthenticate=1");
    } else {
        echo "Ocorreu um erro ao gravar o cadastro, tente novamente mais tarde.";
    }
    //exit;
} else {
    echo "Preenchimento errado, tente novamente.";
}

?>