<?php
include 'Database.php';
include 'Clientes.php';
include 'Servicos.php';

$db = new Database();
$conn = $db->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acao = $_POST["acao"];

    switch ($acao) {
        case "incluir":
            // Obtenha os dados do POST
            $nomeCliente = $_POST["nome_cliente"];
            $enderecoCliente = $_POST["endereco_cliente"];
            $telefoneCliente = $_POST["telefone_cliente"];

            $nomeServico = $_POST["nome_servico"];
            $descricaoServico = $_POST["descricao_servico"];
            $precoServico = $_POST["preco_servico"];

            // Exiba ou insira os dados conforme necessário
            // ...

            break;

        // Outros casos para alterar, excluir, etc.
    }
}
?>
