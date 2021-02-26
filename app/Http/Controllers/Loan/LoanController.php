<?php

namespace App\Http\Controllers\Loan;

use App\Loan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(Loan::all());
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
            'book_id' => 'required',
            'user_id' => 'required',
            'fecha_salida' => 'required',
        ];

        $messages = [
            'required' => 'El campo :attribute es obligatorio',
        ];

        $validateData = $request->validate($rules, $messages);

        $loan = Loan::create($validateData);
        return $this->showOne($loan, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        return $this->showOne($loan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        $rules = [];
        
        $data = $request->validate($rules);

        $book->fill($data);

        if(!$book->isDirty()){
            return $this->errorResponse('Por favor haga algun cambio en algun campo', 422);
        }
        
        $loan->save();

        return $this->showOne($loan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        $loan->delete();
        return $this->showOne($loan);
    }
}
