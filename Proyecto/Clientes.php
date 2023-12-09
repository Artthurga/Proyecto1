<?php
class Clientes
{
    public $nomeCliente;
    public $enderecoCliente;
    public $telefoneCliente;
    public $idCliente;

    public function __construct($nomeCliente, $enderecoCliente, $telefoneCliente, $idCliente = null)
    {
        $this->nomeCliente = $nomeCliente;
        $this->enderecoCliente = $enderecoCliente;
        $this->telefoneCliente = $telefoneCliente;
        $this->idCliente = $idCliente;
    }
}
?>
