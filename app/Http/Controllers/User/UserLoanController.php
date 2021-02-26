<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Loan;
use App\User;
use Illuminate\Http\Request;

class UserLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $loan = $user->loans()->get();
        return $this->showAll($loan);
    }
}
