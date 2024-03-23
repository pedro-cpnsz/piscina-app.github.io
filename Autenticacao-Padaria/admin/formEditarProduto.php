<?php
    if (isset($_GET["mensagem"]) && !empty($_GET["mensagem"])) {
        $mensagem = $_GET["mensagem"]; ?>

        <div class="alert alert-success" role="alert">
            <?=$mensagem;?>
        </div>
<?php } ?>

<?php
    if (isset($_GET["id"]) && !empty($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "SELECT * FROM produtos where id = $id";
        $conectar = new Mysqli("localhost", "root", "", "padariacreber");
        $resultado = $conectar->query($sql);

        while($linha = $resultado->fetch_array())
            $lista = $linha;
            //echo $lista["nome"];
?>

<form action="editarProduto.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTitulo">Titulo*:</label>
      <input type="text" value="<?=$lista["titulo"];?>" class="form-control" id="inputTitulo" name="titulo" placeholder="Digite o titulo" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputcategoria4">Categoria*:</label>
      <input type="text" value="<?=$lista["categoria"];?>" class="form-control" id="inputcategoria4" name="categoria" placeholder="Digite a categoria" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputvalor">Valor*:</label>
      <input type="number" value="<?=$lista["valor"];?>" class="form-control" id="inputvalor" name="valor" placeholder="Digite o valor" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputquantidade4">Quantidade*:</label>
      <input type="number" value="<?=$lista["quantidade"];?>" class="form-control" id="inputquantidade4" name="quantidade" placeholder="Digite a quantidade" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPeso">Peso*:</label>
      <input type="number" value="<?=$lista["peso"];?>" class="form-control" id="inputPeso" name="peso" placeholder="Digite o peso" required>
    </div>
  </div>
  <br>
  <input type="hidden" name="id" value="<?=$lista["id"];?>">
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<?php 
} else {
    header("location: index.php?pagina=listarUsuario.php&isAuthenticate=1");
} ?>