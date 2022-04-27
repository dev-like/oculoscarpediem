<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Foto_produtos extends Model
{
    protected $table = 'foto_produtos';
    protected $fillable = ['produtos_id','slug','imagem'];
    protected $dates = ['deleted_at'];

    public function produto()
    {
        return $this->hasMany('App\Models\Produto');
    }
    use SoftDeletes,CascadeSoftDeletes ;
}
