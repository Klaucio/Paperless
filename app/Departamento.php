<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $fillable=['id','designacao','abreviatura','faculdade_id'];
    public $timestamps=true;

    public function faculdades(){
        return $this->belongsTo(Faculdade::class,'faculdade_id');
    }
    public function curso(){
        return $this->hasMany(Curso::class);
    }
}
