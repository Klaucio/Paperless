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
        'name', 'email', 'password','tipo','avatar','instituicao_id'
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
        return $this->belongsTo(Instituicao::class,'instituicao_id');
    }
    public function disciplinas(){
        return $this->belongsToMany(Disciplina::class);
//        ,'disciplina_user','user_id','disciplina_id'
    }
}
