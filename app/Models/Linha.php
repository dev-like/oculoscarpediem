<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Linha extends Model
{
    protected $table = 'linha';
    protected $fillable = ['id','nome','slug','imagem'];
    protected $dates = ['deleted_at'];

    public function produto()
    {
        return $this->hasMany('App\Models\Produto');
    }
    use SoftDeletes,CascadeSoftDeletes ;
}
