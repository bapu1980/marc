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
	   $data = DB::table('welcomes')->get();
	   return view('welcome', ['blogs' => $blogs,'datas' => $data]);
   }
   
   public function admin_welcome(){
		$data = DB::table('welcomes')->get();
		return view('admin_welcome',['datas' => $data]);
   }
   
   public function edit($id){
        $welcome= DB::table('welcomes')->where('id',$id)->get();
		return view('welcome_edit',compact('welcome'));
    }
	
	public function update(Request $request){
		
		DB::table('welcomes')
            ->where('id', $request->id)
            ->update(['valeur' => $request->valeur]);
		return redirect('admin_welcome')->withOk("La modification sur ".$request->titre." a été enregistrée.");
	}
}
