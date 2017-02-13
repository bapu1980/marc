<?php

namespace App\Repositories;

use App\Blog;

class BlogRepository
{
    protected $blog;
	
	public function __construct(Blog $blog){
		$this->blog=$blog;
	}
	
	private function save(Blog $blog, Array $inputs){
		$blog->titre=$inputs['titre'];
		$blog->picture=$inputs['picture'];
		$blog->ville=$inputs['ville'];
		$blog->pays=$inputs['pays'];
		$blog->blog_text=$inputs['blog_text'];
		$blog->save();
	}
	
	public function getPaginate($n){
		return $this->blog->paginate($n);
	}
	
	public function store(Array $inputs){
		$blog= new $this->blog;
		$this->save($blog, $inputs);
		return $blog;
	}
	
	public function getById($id){
		return $this->blog->findOrFail($id);
	}
	
	public function update($id, Array $inputs){
		$this->save($this->getById($id),$inputs);
	}
	
	public function destroy($id){
		$this->getById($id)->delete();
	}
}
