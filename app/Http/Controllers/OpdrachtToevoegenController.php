<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class OpdrachtToevoegenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');

        /* if (Auth::check()) {
        // The user is logged in...
            return view('opdrachtoevoegen');
        }
        else {
            return view('auth\login');
        } */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('opdrachttoevoegen');
    }
}
