<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    public static function user($id){
        $user = User::where(['id'=>$id])->first();
        return  $user;
    }

    public static function updateUser($datos){
        $query = User::where('email',$datos['inputEmail'])->first();
        $query->name = isset($datos['inputName'])?$datos['inputName']:'default';
        $query->email = isset($datos['inputEmail'])?$datos['inputEmail']:'default';
        $query->username = isset($datos['inputUserName'])?$datos['inputUserName']:'default';
        $query->save();
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
