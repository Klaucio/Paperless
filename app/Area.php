<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $fillable=['id','designacao'];
    public $timestamps=true;

    public function disciplinas(){
        return $this->hasMany(Disciplina::class);
    }

}
