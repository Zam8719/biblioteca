<?php

namespace App\Http\Controllers\Book;

use App\Book;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class BookUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {
        $user = $book->loans()
            ->with('user')
            ->get()
            ->pluck('user');
        return $this->showAll($user);
    }
}
