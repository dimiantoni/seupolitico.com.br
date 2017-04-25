<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politico extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_orcamento', 
        'condicao', 
        'matricula', 
        'id_parlamentar', 
        'nome', 
        'nome_parlamentar', 
        'url_foto',
        'sexo',
        'uf',
        'partido',
        'gabinete',
        'anexo',
        'fone',
        'email',
    ];

}
