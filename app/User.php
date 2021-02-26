<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\UserResource;

class User extends Model
{
    protected $fillable = [
        'nombre', 'email', 'contraseña',
    ];

    protected $hidden = ['pivot',];

    public $resource = UserResource::class;

    public function loans(){
        return $this->hasMany(Loan::class);
    }
}
