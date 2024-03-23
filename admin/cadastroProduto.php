<?php

if(isset($_POST["titulo"]) && !empty($_POST["titulo"]) &&
isset($_POST["categoria"]) && !empty($_POST["categoria"]) &&
isset($_POST["valor"]) && !empty($_POST["valor"]) &&
isset($_POST["quantidade"]) && !empty($_POST["quantidade"]) &&
isset($_POST["peso"]) && !empty($_POST["peso"])) {
    $titulo = $_POST["titulo"];
    $categoria = $_POST["categoria"];
    $valor = $_POST["valor"];
    $quantidade = $_POST["quantidade"];
    $peso = $_POST["peso"];
    $dataCadastro = date("Y-m-d H:m:s");

    $connectDB = new Mysqli("localhost", "root", "", "padariacreber");

    $sqlUsuarios = "INSERT INTO produtos (titulo, categoria, valor, quantidade, peso, dataCadastro) VALUES ('".$titulo."', '".$categoria."', '".$valor."', '".$quantidade."', '".$peso."', '".$dataCadastro."')";
    $resultado = $connectDB -> query("$sqlUsuarios");
    if($resultado) {
        echo "Cadastro realizado com sucesso!";
        header("location: /Autenticacao-Padaria/admin/index.php?pagina=listarProduto.php&isAuthenticate=1");
    } else {
        echo "Ocorreu um erro ao gravar o cadastro, tente novamente mais tarde.";
    }
    exit;
} else {
    echo "Preenchimento errado, tente novamente.";
}

?>