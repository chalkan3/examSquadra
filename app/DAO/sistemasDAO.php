<?php 

namespace App\DAO;

use App\ISistemas;
use App\Sistemas;
use Illuminate\Support\Facades\DB;


class SistemasDAO {
    public function Add(ISistemas $sistemas){
        $sistemas->save();
    }

    public function GetAll(){
        $dados = Sistemas::all();
        return $dados;
    }

    public function Update(int $id, ISistemas $sistemas){
        $dados = Sistemas::find($id);
        if(isset($dados)){
             $dados->descricao = $sistemas->descricao;
             $dados->sigla = $sistemas->sigla; 
             $dados->emailAtendimento = $sistemas->emailAtendimento;
             $dados->save();
        }else{
            throw new Exception("Não foi possivel adiquirir o sistema");
        }
    }

    public function GetFilter($descricao,$sigla,$email){
        $dados = DB::table('sistemas')->where('Descricao',$descricao)
                                      ->orWhere('Sigla', $sigla)
                                      ->orWhere('emailAtendimento', $email)
                                      ->get();
        return $dados;
    }

    public function GetByID(int $id){
        $dados = Sistemas::find($id);
        if(isset($dados)){
            return $dados;
        }else{
            throw new Exception("Não foi possivel adiquirir o sistema");
        }
    }

    public function Delete(int $id){
        $dados = Sistemas::find($id);
        if(isset($dados)){
             $dados->delete();
        }else{
            throw new Exception("Não foi possivel adiquirir o sistema");
        }
    }

}