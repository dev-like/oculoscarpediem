<?php

namespace App\Models;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parceiro extends Model
{
    protected $table = 'parceiros';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id','nome','imagem','site'];

    public function produto()
    {
        return $this->hasMany('App\Models\Produto');
    }
    use SoftDeletes,CascadeSoftDeletes ;
}
