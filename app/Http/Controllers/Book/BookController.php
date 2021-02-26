<?php

namespace App\Http\Controllers\Book;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource; 

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(Book::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'titulo' => 'required|max:255',
            'descripcion' => 'required|max:255'
        ];

        $messages = [
            'required' => 'El campo :attribute es obligatorio',
        ];

        $validateData = $request->validate($rules, $messages);

        $book = Book::create($validateData);
        return $this->showOne($book, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return $this->showOne($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            'titulo' => 'max:255',
            'descripcion' => 'max:255'
        ];
        
        $data = $request->validate($rules);

        $book->fill($data);

        if(!$book->isDirty()){
            return $this->errorResponse('Por favor haga algun cambio en algun campo', 422);
        }
        
        $book->save();

        return $this->showOne($book);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return $this->showOne($book);
    }
}
