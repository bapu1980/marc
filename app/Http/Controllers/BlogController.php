<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
use Illuminate\Http\Request;

// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

class BlogController extends Controller
{
	protected $blogRepository;
	protected $nbrePerPage =4;
	
	public function __construct(BlogRepository $blogRepository){
		$this->blogRepository=$blogRepository;
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
		$blog=$this->blogRepository->getPaginate($this->nbrePerPage);
		$links=$blog->render();
		return view('blog', compact('blog','links'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog_create');
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
        $extension = $image->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        $image->move($destinationPath,$image->getClientOriginalName()); // uploading file to given path
		$path = public_path('images/'. $image->getClientOriginalName());
		
		Image::make($destinationPath.'/'.$image->getClientOriginalName())->resize(650,350)->save($path);
	  
        $blog=$this->blogRepository->store($request->all());
		return redirect('blog')->withOk("Le nouveau blog ".$blog->titre." a été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
