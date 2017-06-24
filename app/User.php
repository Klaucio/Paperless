<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','tipo','avatar','instituicao_id','estado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps=true;

    public function instituicao(){
        return $this->belongsTo('App\Instituicao','instituicao_id');
    }
    public function disciplinas(){
        return $this->belongsToMany('App\Disciplina','disciplina_user','user_id','disciplina_id');
//        ,'disciplina_user','user_id','disciplina_id'
    }

    public function materiais(){
        return $this->belongsToMany('App\Disciplina','material','user_id','disciplina_id');
//        ,'disciplina_user','user_id','disciplina_id'
    }
}
