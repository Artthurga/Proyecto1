<!-- Formulário para exclusão -->
<h2>Excluir Cliente e Serviço</h2>
<form action="form.php" method="post">
    <label for="id_cliente">ID do Cliente:</label>
    <input type="text" name="id_cliente" required><br>

    <!--<label for="id_servico">ID do Serviço:</label>
    <input type="text" name="id_servico" required><br>
    -->

    <input type="hidden" name="acao" value="excluir">
    <input type="submit" value="Excluir">
</form>
