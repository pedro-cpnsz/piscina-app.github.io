<?php

if(isset($_POST["nome"]) && !empty($_POST["nome"]) &&
isset($_POST["email"]) && !empty($_POST["email"]) &&
isset($_POST["usuario"]) && !empty($_POST["usuario"]) &&
isset($_POST["senha"]) && !empty($_POST["senha"]) &&
isset($_POST["cidade"]) && !empty($_POST["cidade"]) &&
isset($_POST["estado"]) && !empty($_POST["estado"]) &&
isset($_POST["cep"]) && !empty($_POST["cep"]) &&
isset($_POST["endereco"]) && !empty($_POST["endereco"]) &&
isset($_POST["numeroCasa"]) && !empty($_POST["numeroCasa"]) &&
isset($_POST["complemento"]) && !empty($_POST["complemento"]) &&
isset($_POST["checkBox"]) && !empty($_POST["checkBox"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = md5($_POST["senha"]);
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $numeroCasa = $_POST["numeroCasa"];
    $complemento = $_POST["complemento"];
    $checkBox = $_POST["checkBox"];
    $dataCadastro = date("Y-m-d H:m:s");

    $connectDB = new Mysqli("localhost", "root", "", "padariacreber");

    $sqlUsuarios = "INSERT INTO usuarios(nome, email, usuario, senha, cidade, estado, cep, endereco, numeroCasa, complemento, checkBox, dataCadastro) VALUES ('".$nome."', '".$email."', '".$usuario."', '".$senha."', '".$cidade."', '".$estado."', '".$cep."', '".$endereco."', '".$numeroCasa."', '".$complemento."', '".$checkBox."', '".$dataCadastro."')";
    $resultado = $connectDB -> query("$sqlUsuarios");
    if($resultado) {
        echo "Cadastro realizado com sucesso!";
        header("location: home.php");
    } else {
        echo "Ocorreu um erro ao gravar o cadastro, tente novamente mais tarde.";
    }
    exit;
} else {
    echo "Preenchimento errado, tente novamente.";
}

?>