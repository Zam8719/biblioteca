<?php

namespace App\Http\Controllers\User;

use App\Book;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $book = $user->loans()
            ->with('book')
            ->get()
            ->pluck('book');
        return $this->showAll($book);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Book $book)
    {
        //
    }
}
