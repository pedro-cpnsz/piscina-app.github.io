<?php
//listar Usuário

$local = "localhost";
$usuario = "root";
$senha = "";
$banco = "padariacreber";

$conexao = new Mysqli($local, $usuario, $senha, $banco);

$sql = "select * from produtos";

$resultado = $conexao->query($sql);

$lista = array();//criando um array vazio
//percorrendo o objeto $resultado e, enquanto
//tiver registro no objeto, pega o registro
//e, armazena em $linha e depois em lista.
while($linha = $resultado->fetch_array()){
    $lista[] = $linha;
}
//echo "<pre>";
//print_r($lista);
//echo "</pre>";

?>

<table border=1>
    <th>ID</th>
    <th>Titulo</th>
    <th>Valor</th>
    <th>Ações</th>
    <?php
        $i = 1;
        foreach($lista as $value){
            $id = $value["id"];
    ?>
    <tr>
        <td><?=$i++;?></td>
        <td><?=$value["titulo"];?></td>
        <td><?=$value["valor"];?></td>
        <td>
            <a href="index.php?pagina=formEditarProduto.php&isAuthenticate=1&id=<?=$id;?>">[EDITAR]</a>
            <a href="index.php?pagina=excluirProduto.php&isAuthenticate=1&id=<?=$id;?>">[EXCLUIR]</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>









