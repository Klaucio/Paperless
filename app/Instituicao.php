<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    //
    protected $fillable=['id','designacao','abreviatura'];
    public $timestamps=true;

    public function users(){
        return $this->hasMany('App\User');
    }
}
