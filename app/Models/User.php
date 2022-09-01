<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'password',
        'role'

    ];

    //mutators

    protected $hidden = [

        'password'
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
