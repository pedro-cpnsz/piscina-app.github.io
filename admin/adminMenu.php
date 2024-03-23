<style>
    header {
        margin-top: 15px;
        padding-bottom: 65px;
        border-bottom: 2px solid #955e66a3;
        text-align: center;
        height: 120px;
        background-color: #fff;
        color: #a07237;
    }
    .fundo {
        background-color: #e4d2c7;
    }
    .container {
        padding-top: 20px;
        background-color: #fff;
    }
    .imgPaes {
        width: 200px;
    }
</style>
    <div class="fundo">
        <div class="container rounded-top">
            <div>
                <h2>Ações disponíveis</h2>
                <p>Este é o menu de ações administrativas disponíveis no momento:<br>
            </div>
            <div class="conteudo">
                <table border="solid 1px black">
                    <tr>
                        <td>
                            <a href="#">
                                <h3>Adicionar usuário (administrador ou não)</h3>
                                <p>Adiciona um usuário com permissões de administrador no banco ou não.</p>
                            </a>
                        </td>
                        <td>
                            <a href="?pagina=listarUsuario.php&isAuthenticate=1">
                                <h3>Listar usuários</h3>
                                <p>Gera um relatório dos usuários cadastrados.</p>
                            </a>
                        </td>
                        <td>
                            <a href="?pagina=formCadastroProduto.php&isAuthenticate=1">
                                <h3>Cadastrar produtos</h3>
                                <p>Acessa o formulário de cadastro de produtos.</p>
                            </a>
                        </td>
                        <td>
                            <a href="?pagina=listarProduto.php&isAuthenticate=1">
                                <h3>Listar produtos</h3>
                                <p>Gera um relatório dos produtos cadastrados.</p>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>