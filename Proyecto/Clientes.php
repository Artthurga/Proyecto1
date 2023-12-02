<?php
class Clientes {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function inserirCliente($nome, $endereco, $telefone) {
        $sql = "INSERT INTO clientes (nombre_cliente, direccion, telefono) VALUES ('$nome', '$endereco', '$telefone')";
        return $this->conn->query($sql);
    }

    public function alterarCliente($id, $nome, $endereco, $telefone) {
        $sql = "UPDATE clientes SET nombre_cliente='$nome', direccion='$endereco', telefono='$telefone' WHERE id_cliente=$id";
        return $this->conn->query($sql);
    }

    public function excluirCliente($id) {
        $sql = "DELETE FROM clientes WHERE id_cliente=$id";
        return $this->conn->query($sql);
    }
}
?>
