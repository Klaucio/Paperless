<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    //
    protected $fillable=['id','designacao','abreviatura'];
    public $timestamps=true;

    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
//        ,'disciplina_user','disciplina_id','user_id'
    }
}
