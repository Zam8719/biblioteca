<?php

namespace App;

use App\Book;
use App\User;
use App\Http\Resources\LoanResource;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{

    public $resource = LoanResource::class;

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
