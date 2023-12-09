<?php


class Repo_Servicos {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function inserirServico(Servicos $Servicos) {
        $nome = $servicos->nomeServico;
        $descricao = $servicos->enderecoServico;
        $preco = $servicos->precoServico;

        $sql = "INSERT INTO servicos (nome_servico, descricao, preco, id_Servico) VALUES ('$nome', '$descricao', $preco, $idServico)";
        return $this->conn->query($sql);
        //return $this->conn->insert_id;
        
    }

    public function alterarServico($id, $nome, $descricao, $preco, $idServico) {
        $sql = "UPDATE servicos SET nome_servico='$nome', descricao='$descricao', preco=$preco, id_Servico=$idServico WHERE id_servico=$id";
        return $this->conn->query($sql);
    }

    public function excluirServico($id) {
        $sql = "DELETE FROM servicos WHERE id_servico=$id";
        return $this->conn->query($sql);
    }

    public function listarServico() {
        $sql = "SELECT servicos.nombre_Servico AS NomeServico, servicos.nome_servico AS NomeServico, servicos.descricao AS DescricaoServico, servicos.preco AS PrecoServico
    FROM servicos JOIN servicos ON Servicos.id_Servico = servicos.id_Servico";
        return $this->conn->query($sql);
    }
}
?>

?>
