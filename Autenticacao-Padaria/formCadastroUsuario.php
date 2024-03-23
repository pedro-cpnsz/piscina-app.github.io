<h2>Preencha os campos para criar sua conta.</h2>
<br>
<form action="cadastroUsuario.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNome">Nome*:</label>
      <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Digite seu nome" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email*:</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Digite seu email" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputUsuario">Usuário*:</label>
      <input type="text" class="form-control" id="inputUsuario" name="usuario" placeholder="Digite seu usuário" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Senha*:</label>
      <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="Digite sua senha" required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlFile1">Foto de perfil:</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fotoPerfil">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade*:</label>
      <input type="text" class="form-control" id="inputCity" name="cidade" placeholder="Digite sua cidade" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado*:</label>
      <select id="inputEstado" name="estado" class="form-control" required>
        <option selected>Selecione o seu estado</option>
        <option value="acre">Acre</option>
        <option value="parana">Paraná</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP*:</label>
      <input type="number" class="form-control" id="inputCEP" name="cep" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Endereço*:</label>
      <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="Digite seu endereço">
    </div>
    <div class="form-group col-md-2">
      <label for="inputNumero">Número*:</label>
      <input type="number" class="form-control" id="inputNumero" name="numeroCasa" placeholder="Nº" required>
  </div>
  <div class="form-group col-md-4">
      <label for="inputComplemento">Complemento:</label>
      <input type="text" class="form-control" id="inputComplemento" name="complemento" placeholder="Digite o complemento">
    </div>
 <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" name="checkBox">
      <label class="form-check-label" for="gridCheck">Clique em mim</label>
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>