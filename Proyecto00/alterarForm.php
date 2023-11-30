<!-- Formulário para alteração -->
<h2>Alterar Cliente e Serviço</h2>
<form action="form.php" method="post">
    <label for="id_cliente">ID do Cliente:</label>
    <input type="text" name="id_cliente" required><br>
    <label for="nome_cliente">Novo Nome do Cliente:</label>
    <input type="text" name="nome_cliente" required><br>
    <label for="endereco_cliente">Novo Endereço do Cliente:</label>
    <input type="text" name="endereco_cliente" required><br>
    <label for="telefone_cliente">Novo Telefone do Cliente:</label>
    <input type="text" name="telefone_cliente" required><br>

    <label for="id_servico">ID do Serviço:</label>
    <input type="text" name="id_servico" required><br>
    <label for="nome_servico">Novo Nome do Serviço:</label>
    <input type="text" name="nome_servico" required><br>
    <label for="descricao_servico">Nova Descrição do Serviço:</label>
    <input type="text" name="descricao_servico" required><br>
    <label for="preco_servico">Novo Preço do Serviço:</label>
    <input type="text" name="preco_servico" required><br>

    <input type="hidden" name="acao" value="alterar">
    <input type="submit" value="Alterar">
</form>
