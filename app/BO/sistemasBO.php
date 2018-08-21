<?php


namespace App\BO;
use App\DAO\sistemasDAO;
use App\Mapper\SistemasMapper;
use App\Sistemas;


class SistemasBO implements ISistemasBO {
    
    private $ID;
    private $descricao;
    private $sigla;
    private $emailAtendimento;
    private $url;
    private $status;
    private $createdAt;
    private $updatedAt;
    private $sistemaMapper; 
    private $DAO;
    private $sistema;

    public function __construct(
                                $id = null ,
                                $descricao = null ,
                                $sigla = null ,
                                $emailAtendimento = null ,
                                $url = null,
                                $status = null
                                )
    {
        $this->ID = $id;
        $this->descricao = $descricao;
        $this->sigla = $sigla;
        $this->emailAtendimento = $emailAtendimento;
        $this->url = $url;
        $this->status = $status;
        //fazer um factory depois
        $this->sistema = new Sistemas;
        $this->sistemaMapper = new SistemasMapper(new Sistemas());
        $this->DAO = new SistemasDAO;

    }
   

    public function getID(){ return $this->ID; }
    public function setID($id){ $this->ID = $id; }

    public function getDescricao(){ return $this->descricao;}
    public function setDescricao($descricao){ $this->descricao = $descricao; }

    public function getSigla(){ return $this->sigla; }
    public function setSigla($sigla){ $this->sigla = $sigla; }

    public function getEmailAtendimento(){ return $this->emailAtendimento;}
    public function setEmailAtendimento($email){ $this->emailAtendimento = $email;}

    public function getUrl(){ return $this->url;}
    public function setUrl($url){ $this->url = $url;}

    public function getStatus(){ return $this->status;}
    public function setStatus($status){ $this->status = $status;}

    private function mapear(){
        $this->sistema = $this->sistemaMapper->mapear(
            $this->descricao,$this->sigla,
            $this->emailAtendimento,
            $this->url,
            $this->status
        );
    }

    public function listar(){
        return $this->DAO->GetAll();
    }

    public function filtrar(){
        return $this->DAO->GetFilter($this->descricao, $this->sigla, $this->emailAtendimento);
    }
    public function save(){
        $this->mapear();
        $this->DAO->Add($this->sistema);
    }
    

} 
