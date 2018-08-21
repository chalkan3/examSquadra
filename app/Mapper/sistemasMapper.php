<?php

namespace App\Mapper;
use App\Sistemas;

class SistemasMapper implements ISistemasMapper{

    private $sistemas;

    public function __constructor(Sistemas $sistema){
        $this->sistemas = $sistema;
    }
    public function Mapear($descricao = null ,$sigla = null ,$emailAtendimento = null,$url = null,$status = null){
        $sistema = new Sistemas();
        $sistema->Descricao = $descricao;
        $sistema->Sigla = $sigla;
        $sistema->emailAtendimento = $emailAtendimento;
        $sistema->url = $url;
        $sistema->Status = $status;

        return $a;
    }
}