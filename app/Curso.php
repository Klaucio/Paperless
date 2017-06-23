<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    protected $fillable=['id','designacao','abreviatura','departamento_id'];
    public $timestamps=true;
    public function faculdades(){
        return $this->belongsTo(Departamento::class,'departamento_id');
    }
}
