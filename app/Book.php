<?php

namespace App;

use App\Loan;
use App\Http\Resources\BookResource;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $resource = BookResource::class;

    protected $hidden = ['pivot',];

    protected $fillable = [
        'titulo', 'descripcion',
    ];

    public function loans(){
        return $this->hasMany(Loan::class);
    }
}
