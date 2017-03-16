<?php

namespace App\Repositories;

use App\Commentaire;

class CommentaireRepository
{
    protected $commentaire;
	
	public function __construct(Commentaire $commentaire){
		$this->commentaire=$commentaire;
	}
	
	private function save(Commentaire $commentaire, Array $inputs){
		$commentaire->nom=$inputs['nom'];
		$commentaire->email=$inputs['email'];
		$commentaire->commentaire_text=$inputs['commentaire_text'];
		$commentaire->blog_id=$inputs['blog_id'];
		$commentaire->save();
	}
		
	public function store(Array $inputs){
		$commentaire= new $this->commentaire;
		$this->save($commentaire, $inputs);
		return $commentaire;
	}
	
	public function getById($id){
		return $this->commentaire->findOrFail($id);
	}
	
}
