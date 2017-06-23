<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $fillable=['id','designacao','descricao'];
    public $timestamps=true;
}
