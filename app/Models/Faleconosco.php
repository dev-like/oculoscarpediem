<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faleconosco extends Model
{
    protected $table = 'faleconosco';
    protected $fillable = ['id', 'endereco', 'telefone1', 'telefone2', 'email', 'facebook', 'instagram', 'linkedin', 'youtube', 'funcionamento', 'imagem1', 'imagem2'];

    use SoftDeletes;
}
