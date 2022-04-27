<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Instagram extends Model
{
    protected $table = 'instagram';
    protected $fillable = ['id','nome','url'];
    protected $dates = ['deleted_at'];

    
    use SoftDeletes,CascadeSoftDeletes ;
}
