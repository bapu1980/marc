<?php

namespace App\Repositories;

use App\Blog;

class BlogRepository
{
    protected $blog;
	
	public function __construct(Blog $blog){
		$this->blog=$blog;
	}
	
	private function save(Blog $blog, Array $inputs, $img){
		$blog->titre=$inputs['titre'];
		$blog->picture=$img;
		$blog->ville=$inputs['ville'];
		$blog->pays=$inputs['pays'];
		$blog->longitude=$inputs['longitude'];
		$blog->latitude=$inputs['latitude'];
		$blog->blog_text=$inputs['blog_text'];
		$blog->save();
	}
	
	public function getPaginate($n){
		return $this->blog->paginate($n);
	}
	
	public function store(Array $inputs, $img){
		$blog= new $this->blog;
		$this->save($blog, $inputs, $img);
		return $blog;
	}
	
	public function getById($id){
		return $this->blog->findOrFail($id);
	}
	
	public function update($id, Array $inputs, $img){
		$this->save($this->getById($id),$inputs, $img);
	}
	
	public function destroy($id){
		$this->getById($id)->delete();
	}
}
