<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    //
    public $timestamps = true;
    protected $fillable = ['id', 'designacao', 'abreviatura'];

    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function disciplinas(){
        return $this->hasMany('App\Faculdade');
    }
}
