<?php

namespace App\Http\Controllers;

use App\Politico;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PoliticoController extends Controller
{
    protected $table = 'politicos';


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deputados = Politico::paginate(25);
        
        return view('politicos', ['deputados' => $deputados]);
    }

    public function importar()
    {
        $politicos = simplexml_load_file("http://www.camara.gov.br/SitCamaraWS/Deputados.asmx/ObterDeputados");
        //echo"<pre>"; print_r($politicos);exit;
        foreach ($politicos->deputado as $fdp) {
            $fdps = new Politico;
            $fdps->ide_cadastro = $fdp->ideCadastro;
            $fdps->cod_orcamento = $fdp->codOrcamento;
            $fdps->condicao = $fdp->condicao;
            $fdps->matricula = $fdp->matricula;
            $fdps->id_parlamentar = $fdp->idParlamentar;
            $fdps->nome = $fdp->nome;
            $fdps->nome_parlamentar = $fdp->nomeParlamentar;
            $fdps->url_foto = $fdp->urlFoto;
            $fdps->sexo = $fdp->sexo;
            $fdps->uf = $fdp->uf;
            $fdps->partido = $fdp->partido;
            $fdps->gabinete = $fdp->gabinete;
            $fdps->anexo = $fdp->anexo;
            $fdps->fone = $fdp->fone;
            $fdps->email = $fdp->email;

            if($fdps->save()){
                echo "importado " . $fdps->nome ."<br>";
            }
        }
        
        
        /*$res = DB::table('politicos')->insert($fdps);*/

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
        //
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
