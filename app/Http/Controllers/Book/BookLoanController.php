<?php

namespace App\Http\Controllers\Book;

use App\Book;
use App\Http\Controllers\Controller;
use App\Loan;
use Illuminate\Http\Request;

class BookLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {
        $loan = $book->loans()->get();
        return $this->showAll($loan);
    }
}
