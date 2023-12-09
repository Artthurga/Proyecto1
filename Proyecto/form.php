<?php
include 'Database.php';
include 'Clientes.php';
include 'Repo_Clientes.php';

$db = new Database();
$conn = $db->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acao = $_POST["acao"];

    $repoClientes = new Repo_Clientes($conn);

    switch ($acao) {
        case "incluir":
            $nomeCliente = $_POST["nome_cliente"];
            $enderecoCliente = $_POST["endereco_cliente"];
            $telefoneCliente = $_POST["telefone_cliente"];

            $clienteObj = new Clientes($nomeCliente, $enderecoCliente, $telefoneCliente);
            $idCliente = $repoClientes->inserirCliente($clienteObj);
            break;

        case "alterar":
            $idCliente = $_POST["id_cliente"];
            $nomeCliente = $_POST["nome_cliente"];
            $enderecoCliente = $_POST["endereco_cliente"];
            $telefoneCliente = $_POST["telefone_cliente"];

            $clienteObj = new Clientes($nomeCliente, $enderecoCliente, $telefoneCliente, $idCliente);
            $repoClientes->alterarCliente($clienteObj);
            break;

        case "excluir":
            $idCliente = $_POST["id_cliente"];
            $repoClientes->excluirCliente($idCliente);
            break;

        case "listar":
            $repoClientes->listarClientes();
            break;

        default:
            echo "Ação inválida";
    }
}
?>
