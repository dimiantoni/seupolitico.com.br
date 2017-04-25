<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PoliticosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $politicos = simplexml_load_file("http://www.camara.gov.br/SitCamaraWS/Deputados.asmx/ObterDeputados");
        $fdps = [];
        foreach ($politicos->deputado as $fdp) {
        	$fdps[] = ['ide_cadastro' => $fdp->ideCadastro];
        	$fdps[] = ['cod_orcamento' => $fdp->codOrcamento];
        	$fdps[] = ['condicao' => $fdp->condicao];
        	$fdps[] = ['matricula' => $fdp->matricula];
        	$fdps[] = ['id_parlamentar' => $fdp->idParlamentar];
        	$fdps[] = ['nome' => $fdp->nome];
        	$fdps[] = ['nome_parlamentar' => $fdp->nomeParlamentar];
        	$fdps[] = ['url_foto' => $fdp->urlFoto];
        	$fdps[] = ['sexo' => $fdp->sexo];
        	$fdps[] = ['uf' => $fdp->uf];
        	$fdps[] = ['partido' => $fdp->partido];
        	$fdps[] = ['gabinete' => $fdp->gabinete];
        	$fdps[] = ['anexo' => $fdp->anexo];
        	$fdps[] = ['fone' => $fdp->fone];
        	$fdps[] = ['email' => $fdp->email];
        }
        
        DB::table('politicos')->insert($fdps);
    }
}
