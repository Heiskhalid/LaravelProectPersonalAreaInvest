<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

     public function index(){

         return view('financials.deposit');
     }
      public function show(){


         return view('financials.YourDeposits');
      }
}