<?php
class Repo_Clientes {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function inserirCliente(Clientes $cliente) 
{
    $nome = $cliente->nomeCliente;
    $endereco = $cliente->enderecoCliente;
    $telefone = $cliente->telefoneCliente;

    $sql = "INSERT INTO clientes (nombre_cliente, direccion, telefono) VALUES ('$nome', '$endereco', '$telefone')";
    $this->conn->query($sql);
    return $this->conn->insert_id;
}


    public function alterarCliente(Clientes $cliente) 
    {
        $id = $cliente->idCliente;
        $nome = $cliente->nomeCliente;
        $endereco = $cliente->enderecoCliente;
        $telefone = $cliente->telefoneCliente;

        $sql = "UPDATE clientes SET nombre_cliente='$nome', direccion='$endereco', telefone='$telefone' WHERE id_cliente=$id";
        return $this->conn->query($sql);
    }

    public function excluirCliente($id) 
    {
        $sql = "DELETE FROM clientes WHERE id_cliente=$id";
        return $this->conn->query($sql);
    }

    public function listarClientes() {
        $sql = "SELECT * FROM clientes";
        return $this->conn->query($sql);
    }
}
?>
