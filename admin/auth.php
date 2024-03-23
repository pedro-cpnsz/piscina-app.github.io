<?php

if(isset($_POST["login"]) && isset($_POST["senha"]) && !empty($_POST["login"]) && !empty($_POST["senha"])) {
    $login = $_POST["login"];
    $password = $_POST["senha"];

    $loginDB = "Admin";
    $senhaDB = "qwe123";

    if($login == $loginDB && $password == $senhaDB) {
        $isAuthenticate = true;
        header("location: index.php?isAuthenticate=".$isAuthenticate);
    } else {
        $authmsg = "Usuário ou senha incorreta.";
        header("location: index.php?authmsg=".$authmsg);
    } 
} else {
    $authmsg = "Campos obrigatórios(*) não preenchidos.";
    header("location: index.php?authmsg=".$authmsg);
}

?>