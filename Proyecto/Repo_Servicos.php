<?php
class Repo_Servicos {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function inserirServico($nome, $descricao, $preco, $idCliente) {
        $sql = "INSERT INTO servicos (nome_servico, descricao, preco, id_cliente) VALUES ('$nome', '$descricao', $preco, $idCliente)";
        return $this->conn->query($sql);
    }

    public function alterarServico($id, $nome, $descricao, $preco, $idCliente) {
        $sql = "UPDATE servicos SET nome_servico='$nome', descricao='$descricao', preco=$preco, id_cliente=$idCliente WHERE id_servico=$id";
        return $this->conn->query($sql);
    }

    public function excluirServico($id) {
        $sql = "DELETE FROM servicos WHERE id_servico=$id";
        return $this->conn->query($sql);
    }

    public function listarServicio(){
        $sql = "SELECT *FROM servicos";
        return $this->conn->query($sql);
    }
}
?>

?>
