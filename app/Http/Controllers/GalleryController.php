<?php

namespace App\Http\Controllers;

use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

class GalleryController extends Controller
{
   	protected $galleryRepository;
	protected $nbrePerPage =4;
	
	public function __construct(GalleryRepository $galleryRepository){
		$this->galleryRepository=$galleryRepository;
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
		$gallerys=$this->galleryRepository->getPaginate($this->nbrePerPage);
		$links=$gallerys->render();
		return view('gallery', compact('gallerys','links'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('gallery_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$image = $request->file('image');
		
       	$destinationPath = public_path('images');
		$image->move($destinationPath,$image->getClientOriginalName()); // uploading file to given path
		$path = public_path('images_gallery/'. $image->getClientOriginalName());
		Image::make($destinationPath.'/'.$image->getClientOriginalName())->resize(300,200)->save($path);
		
		$gallery=$this->galleryRepository->store($request->all(),$image->getClientOriginalName());
		return redirect('gallery')->withOk("La nouvelle gallerie ".$gallery->titre." a été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }
	

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $gallery=$this->galleryRepository->getById($id);
	   return view('gallery_edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$destinationPath = public_path('images');
			$image->move($destinationPath,$image->getClientOriginalName()); // uploading file to given path
			$path = public_path('images_gallery/'. $image->getClientOriginalName());
			
			Image::make($destinationPath.'/'.$image->getClientOriginalName())->resize(300,200)->save($path);
			
			$image_update_name = $image->getClientOriginalName();
		}else{
			$gallery=$this->galleryRepository->getById($id);
			$image_update_name = $gallery->picture;
		}
		
		
        $this->galleryRepository->update($id,$request->all(),$image_update_name);
		$gallery=$this->galleryRepository->getById($id);
		return redirect('gallery')->withOk("La gallerie ".$gallery->titre." a été modifiée.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		
    }
}
