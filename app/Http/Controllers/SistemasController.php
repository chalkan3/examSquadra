<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BO\sistemasBO;

class SistemasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sistemaBO = new SistemasBO(null,"sfdfsf","sffsd","fsdf","abc","sws");
       $lista = $sistemaBO->listar();
    //    $sistemaBO->save();
       

       return json_encode($lista);
    // return 'certo';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->json()->all();

        $sistemaBO = new SistemasBO(null,$data["Descricao"],$data["Sigla"],$data["emailAtendimento"]);
        $lista = $sistemaBO->filtrar();

        return json_encode($lista);
    }

    public function adicionar(Request $request)
    {
        $data = $request->json()->all();

        $sistemaBO = new SistemasBO(null,$data["Descricao"],$data["Sigla"],$data["emailAtendimento"],$data["Url"],'Ativo');
        $lista = $sistemaBO->filtrar();

        return json_encode($lista);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
