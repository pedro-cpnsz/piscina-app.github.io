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
        $sql = "SELECT * FROM usuarios where id = $id";
        $conectar = new Mysqli("localhost", "root", "", "padariacreber");
        $resultado = $conectar->query($sql);

        while($linha = $resultado->fetch_array())
            $lista = $linha;
            //echo $lista["nome"];
?>

<form action="editarUsuario.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNome">Nome*:</label>
            <input type="text" value="<?=$lista["nome"];?>" class="form-control" id="inputNome" name="nome" placeholder="Digite seu nome" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email*:</label>
            <input type="email" value="<?=$lista["email"];?>" class="form-control" id="inputEmail4" name="email" placeholder="Digite seu email" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputUsuario">Usuário*:</label>
            <input type="text" value="<?=$lista["usuario"];?>" class="form-control" id="inputUsuario" name="usuario" placeholder="Digite seu usuário" required>
        </div>
        <div class="form-group col-md-3">
            <label for="inputPassword4">Senha*:</label>
            <input type="password" value="<?=$lista["senha"];?>" class="form-control" id="inputPassword4" name="senha" placeholder="Digite sua senha" required>
        </div>
        <div class="form-group col-md-6">
            <label for="exampleFormControlFile1">Foto de perfil:</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fotoPerfil">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Cidade*:</label>
            <input type="text" value="<?=$lista["cidade"];?>" class="form-control" id="inputCity" name="cidade" placeholder="Digite sua cidade" required>
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
            <input type="number" value="<?=$lista["cep"];?>" class="form-control" id="inputCEP" name="cep" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress">Endereço*:</label>
            <input type="text" value="<?=$lista["endereco"];?>" class="form-control" id="inputAddress" name="endereco" placeholder="Digite seu endereço">
        </div>
        <div class="form-group col-md-2">
            <label for="inputNumero">Número*:</label>
            <input type="number" value="<?=$lista["numeroCasa"];?>" class="form-control" id="inputNumero" name="numeroCasa" placeholder="Nº" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputComplemento">Complemento:</label>
            <input type="text" value="<?=$lista["complemento"];?>" class="form-control" id="inputComplemento" name="complemento" placeholder="Digite o complemento">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" name="checkBox">
                <label class="form-check-label" for="gridCheck">Clique em mim</label>
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