<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    //
    protected $fillable=['id','designacao','abreviatura','area_id'];
    public $timestamps=true;

    public function area(){
        return $this->belongsTo('App\Area');
    }
    public function seguidores(){
        return $this->belongsToMany('App\User','disciplina_user','disciplina_id','user_id');
    }


    public function materiais(){
        return $this->belongsToMany('App\User','material','disciplina_id','user_id')->withPivot(['titulo'])->withTimestamps();
    }


}
