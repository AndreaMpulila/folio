<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function __construct()
   {

   }
   public function index()
   {
    
    return view('index');
   }
   public function change()
   {
    session('mode')=='mac'?session(['mode'=>'windows']):session(['mode'=>'mac']);

    return redirect('');
    
   }
}
