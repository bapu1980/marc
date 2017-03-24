<?php

//https://github.com/ARCANEDEV/noCAPTCHA/

namespace App\Http\Controllers;

use App\Repositories\CommentaireRepository;
use Illuminate\Http\Request;
use App\Http\Requests\CommentaireRequest;

class CommentaireController extends Controller
{
	protected $commentaireRepository;
	
	public function __construct(CommentaireRepository $commentaireRepository){
		$this->commentaireRepository=$commentaireRepository;
	}
	
	public function getForm(){
		return view('commentaire');
	}
	
	public function postForm(CommentaireRequest $request){
		$commentaire=$this->commentaireRepository->store($request->all());
		return view('confirm_commentaire');
	}
	
	public function view_all(){
		$commentaires = $this->commentaireRepository->view_all();
			   
		return view('commentaire_all',compact('commentaires'));
	}
}

