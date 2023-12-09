<?php
Class Servicios
{

   
    public $nomeServico;
    public $descricaoServico;
    public $precoServico;
    public $data_Servico;
    public $idServico;

    public function __construct($nomeServico, $descricaoServico, $precoServico, $dataServico, $idServico)
    {
        
        $this->nomeServico = $nomeServico;
        $this->descricaoServico = $descricaoServico;
        $this->precoServico = $precoServico;
        $this->data_Servico = $dataServico;
        $this->idServico = $idServico;

    }


}