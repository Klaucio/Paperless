<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculdade extends Model
{
    //
    protected $fillable=['id','designacao','abreviatura','instituicao_id'];
    public $timestamps=true;

    public function faculdades(){
        return $this->belongsTo(Instituicao::class,'instituicao_id');
    }
    public function departamento(){
        return $this->hasMany(Departamento::class);
    }
}
