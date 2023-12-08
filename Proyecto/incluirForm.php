<!-- Formulário para inclusão -->
<h2>Incluir Cliente e Serviço</h2>

<form action="form.php" method="post">
    
<label for="nome_cliente">Nome do Cliente:</label>
    <input type="text" name="nome_cliente" required><br>
    <label for="endereco_cliente">Endereço do Cliente:</label>
    <input type="text" name="endereco_cliente" required><br>
    <label for="telefone_cliente">Telefone do Cliente:</label>
    <input type="text" name="telefone_cliente" required><br>

    <label for="nome_servico">Nome do Serviço:</label>
    <input type="text" name="nome_servico" required><br>
    <label for="descricao_servico">Descrição do Serviço:</label>
    <input type="text" name="descricao_servico" required><br>
    <label for="preco_servico">Preço do Serviço:</label>
    <input type="text" name="preco_servico" required><br>

    <input type="hidden" name="acao" value="incluir">
    <input type="submit" value="Incluir">
</form>

 <!--Formulário para inclusão

<h2>Incluir Cliente e Serviço</h2>

<form action="processaDados.php" method="post" id="form-incluir">
<form action="form.php" method="post">
<label for="nome_cliente">Nome do Cliente:</label>    
<input type="text" name="nome_cliente" required><br>
    <label for="endereco_cliente">Endereço do Cliente:</label>
    <input type="text" name="endereco_cliente" required><br>
    <label for="telefone_cliente">Telefone do Cliente:</label>
    <input type="text" name="telefone_cliente" required><br>

    <label for="nome_servico">Nome do Serviço:</label>
    <input type="text" name="nome_servico" required><br>
    <label for="descricao_servico">Descrição do Serviço:</label>
    <input type="text" name="descricao_servico" required><br>
    <label for="preco_servico">Preço do Serviço:</label>
    <input type="text" name="preco_servico" required><br>

    <input type="hidden" name="acao" value="incluir">
    <button type="button" onclick="confirmarInclusao()">Confirmar</button>
</form>

<script>
function confirmarInclusao() {
    if (confirm("Confirma a inclusão dos dados?\n\n" + obterDadosFormatados())) {
        document.getElementById("form-incluir").submit();
        
    }
}

function obterDadosFormatados() {
    // Obtenha os dados do formulário e formate como desejar
    var nomeCliente = document.querySelector('input[name="nome_cliente"]').value;
    var enderecoCliente = document.querySelector('input[name="endereco_cliente"]').value;
    var telefoneCliente = document.querySelector('input[name="telefone_cliente"]').value;

    var nomeServico = document.querySelector('input[name="nome_servico"]').value;
    var descricaoServico = document.querySelector('input[name="descricao_servico"]').value;
    var precoServico = document.querySelector('input[name="preco_servico"]').value;

    var dadosFormatados = "Cliente:\nNome: " + nomeCliente + "\nEndereço: " + enderecoCliente + "\nTelefone: " + telefoneCliente + "\n\n";
    dadosFormatados += "Serviço:\nNome: " + nomeServico + "\nDescrição: " + descricaoServico + "\nPreço: " + precoServico;

    return dadosFormatados;
}
</script>-->
