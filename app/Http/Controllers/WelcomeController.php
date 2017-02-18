<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
   public function index(){
	   $blogs = DB::table('blogs')->orderBy('id', 'desc')->get();
		
	   return view('welcome', ['blogs' => $blogs]);
   }
}
