<h2>Preencha os campos para cadastrar um produto.</h2>
<br>
<form action="cadastroProduto.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTitulo">Titulo*:</label>
      <input type="text" class="form-control" id="inputTitulo" name="titulo" placeholder="Digite o titulo" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputcategoria4">Categoria*:</label>
      <input type="text" class="form-control" id="inputcategoria4" name="categoria" placeholder="Digite a categoria" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputvalor">Valor*:</label>
      <input type="number" class="form-control" id="inputvalor" name="valor" placeholder="Digite o valor" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputquantidade4">Quantidade*:</label>
      <input type="number" class="form-control" id="inputquantidade4" name="quantidade" placeholder="Digite a quantidade" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPeso">Peso*:</label>
      <input type="number" class="form-control" id="inputPeso" name="peso" placeholder="Digite o peso" required>
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>