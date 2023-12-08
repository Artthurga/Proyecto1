<?php
require 'Clientes.php';

class Repo_Clientes {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function inserirCliente(Clientes $idCliente) {
        $sql = "INSERT INTO clientes (nombre_cliente, direccion, telefono) VALUES ('$nomeCliente', '$enderecoCliente', '$telefoneCliente')";
        $this->conn->query($sql);
        return $idCliente;
    }

    public function alterarCliente($id, $nome, $endereco, $telefone) {
        $sql = "UPDATE clientes SET nombre_cliente='$nome', direccion='$endereco', telefono='$telefone' WHERE id_cliente=$id";
        return $this->conn->query($sql);
    }

    public function excluirCliente($id) {
        $sql = "DELETE FROM clientes WHERE id_cliente=$id";
        return $this->conn->query($sql);
    }

    public function listarCliente() {
        $sql = "SELECT *From clientes";
        return $this->conn->query($sql);
    }
}
?>
