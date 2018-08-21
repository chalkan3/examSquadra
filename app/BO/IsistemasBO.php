<?php 
namespace App\BO;


interface ISistemasBO{
    public function getID();
    public function setID($id);

    public function getDescricao();
    public function setDescricao($descricao);

    public function getSigla();
    public function setSigla($sigla);

    public function getEmailAtendimento();
    public function setEmailAtendimento($email);

    public function getUrl();
    public function setUrl($url);

    public function getStatus();
    public function setStatus($status);

    public function save();
    public function listar();
    public function filtrar();
}