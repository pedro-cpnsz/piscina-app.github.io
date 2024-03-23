<?php

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

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
isset($_POST["checkBox"]) && !empty($_POST["checkBox"]) &&
isset($_POST["id"]) && !empty($_POST["id"])) {
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
    $id = $_POST["id"];
    $dataCadastro = date("Y-m-d H:m:s");

    $connectDB = new Mysqli("localhost", "root", "", "padariacreber");

    $sqlUsuarios = "UPDATE usuarios SET 
    nome = '".$nome."', 
    email = '".$email."', 
    usuario = '".$usuario."', 
    senha = '".$senha."', 
    cidade = '".$cidade."', 
    estado = '".$estado."', 
    cep = '".$cep."', 
    endereco = '".$endereco."', 
    numeroCasa = '".$numeroCasa."', 
    complemento = '".$complemento."', 
    checkBox = '".$checkBox."', 
    dataCadastro = '".$dataCadastro."' 
    WHERE id = '".$id."'";
    $resultado = $connectDB -> query("$sqlUsuarios");
    if($resultado) {
        echo "Cadastro atualizado com sucesso!";
        header("location: /Autenticacao-Padaria/admin/index.php?pagina=listarUsuario.php&isAuthenticate=1");
    } else {
        echo "Ocorreu um erro ao gravar o cadastro, tente novamente mais tarde.";
    }
    //exit;
} else {
    echo "Preenchimento errado, tente novamente.";
}

?>