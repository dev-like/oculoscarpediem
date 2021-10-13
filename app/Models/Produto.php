<?php

namespace App\Models;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Produto extends Model
{
    protected $table = 'produtos';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id',
    'nome',
    'descricao',
    'linha_id',
    'slug'];

    public function linha()
    {
      return $this->hasMany('App\Models\Linha');

    }
    public function foto_produtos()
    {
      return $this->hasMany('App\Models\foto_produtos');

    }


    use SoftDeletes, CascadeSoftDeletes;
}
