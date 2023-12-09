<!-- Formulário para inclusão -->
<h2>Incluir Cliente</h2>

<form action="form.php" method="post">
    
<label for="nome_cliente">Nome do Cliente:</label>
    <input type="text" name="nome_cliente" required><br>
    <label for="endereco_cliente">Endereço do Cliente:</label>
    <input type="text" name="endereco_cliente" required><br>
    <label for="telefone_cliente">Telefone do Cliente:</label>
    <input type="text" name="telefone_cliente" required><br>

     <!--<label for="nome_servico">Nome do Serviço:</label>
    <input type="text" name="nome_servico" required><br>
    <label for="descricao_servico">Descrição do Serviço:</label>
    <input type="text" name="descricao_servico" required><br>
    <label for="preco_servico">Preço do Serviço:</label>
    <input type="text" name="preco_servico" required><br>-->

    <input type="hidden" name="acao" value="incluir">
    <input type="submit" value="Incluir">

</form>

