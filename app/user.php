<?php

namespace Sanvidm;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Noifiable;
class User extends Authenticatable

//class user extends Model
{
    protected $table ='users';
    //
    protected $fillable=[
    
        'name','email', 'password','remember_token'
    ];
}
