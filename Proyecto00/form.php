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
            $nomeCliente = $_POST["nome_cliente"];
            $enderecoCliente = $_POST["endereco_cliente"];
            $telefoneCliente = $_POST["telefone_cliente"];

            $nomeServico = $_POST["nome_servico"];
            $descricaoServico = $_POST["descricao_servico"];
            $precoServico = $_POST["preco_servico"];

            $clientes = new Clientes($conn);
            $idCliente = $clientes->inserirCliente($nomeCliente, $enderecoCliente, $telefoneCliente);

            $servicos = new Servicos($conn);
            $servicos->inserirServico($nomeServico, $descricaoServico, $precoServico, $idCliente);
            break;

        case "alterar":
            $idCliente = $_POST["id_cliente"];
            $nomeCliente = $_POST["nome_cliente"];
            $enderecoCliente = $_POST["endereco_cliente"];
            $telefoneCliente = $_POST["telefone_cliente"];

            $idServico = $_POST["id_servico"];
            $nomeServico = $_POST["nome_servico"];
            $descricaoServico = $_POST["descricao_servico"];
            $precoServico = $_POST["preco_servico"];

            $clientes = new Clientes($conn);
            $clientes->alterarCliente($idCliente, $nomeCliente, $enderecoCliente, $telefoneCliente);

            $servicos = new Servicos($conn);
            $servicos->alterarServico($idServico, $nomeServico, $descricaoServico, $precoServico, $idCliente);
            break;

        case "excluir":
            $idCliente = $_POST["id_cliente"];
            $idServico = $_POST["id_servico"];

            $clientes = new Clientes($conn);
            $clientes->excluirCliente($idCliente);

            $servicos = new Servicos($conn);
            $servicos->excluirServico($idServico);
            break;

        default:
            echo "Ação inválida";
    }
}
?>
