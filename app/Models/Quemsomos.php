<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quemsomos extends Model
{
    protected $table = 'quemsomos';
    protected $fillable = ['id','razaosocial', 'nomefantasia', 'cnpj', 'ie', 'quemsomos', 'email', 'telefone1', 'telefone2','facebook','instagram','linkedin','youtube','missao','visao', 'valores','imagem1','imagem2', 'end1'];

    use SoftDeletes;
}
