<?php

namespace App\Repositories;

use App\Gallery;

class GalleryRepository
{
    protected $gallery;
	
	public function __construct(Gallery $gallery){
		$this->gallery=$gallery;
	}
	
	private function save(Gallery $gallery, Array $inputs, $img){
		$gallery->titre=$inputs['titre'];
		$gallery->picture=$img;
		$gallery->gallery_text=$inputs['gallery_text'];
		$gallery->save();
	}
	
	public function getPaginate($n){
		return $this->gallery->paginate($n);
	}
	
	public function store(Array $inputs, $img){
		$gallery= new $this->gallery;
		$this->save($gallery, $inputs, $img);
		return $gallery;
	}
	
	public function getById($id){
		return $this->gallery->findOrFail($id);
	}
	
	public function update($id, Array $inputs, $img){
		$this->save($this->getById($id),$inputs, $img);
	}
	
	public function destroy($id){
		$this->getById($id)->delete();
	}
}
