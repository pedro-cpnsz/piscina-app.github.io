<?php
if(isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $_GET["id"];
    $sql = "DELETE FROM produtos where id = $id";
    $conectar = new mysqli("localhost", "root", "","padariacreber");  
    $resultado = $conectar->query($sql);
    if($resultado) {
        echo "Cadastro excluído com sucesso!";
        //header("location: /Autenticacao-Padaria/admin/index.php?pagina=listarUsuario.php&isAuthenticate=1");
    } else {
        echo "Ocorreu um erro ao excluir o cadastro, tente novamente mais tarde.";
    }
}else{
    header("location: index.php?pagina=listarUsuario.php&isAutenticate=1");
}