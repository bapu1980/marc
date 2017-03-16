<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BlogRequest;

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
    public function store(BlogRequest $request)
    {
		$image = $request->file('image');
		$image_show_all = $request->file('image');
		$image_show = $request->file('image');
		if($image->isValid()){
			$destinationPath = public_path('images');
			$image->move($destinationPath,$image->getClientOriginalName()); // uploading file to given path
			$path = public_path('images/'. $image->getClientOriginalName());
			Image::make($destinationPath.'/'.$image->getClientOriginalName())->resize(650,350)->save($path);
			
			$path = public_path('images_show_all/'. $image_show_all->getClientOriginalName());		
			Image::make($destinationPath.'/'.$image_show_all->getClientOriginalName())->resize(850,450)->save($path);
			
			$path = public_path('images_show/'. $image_show->getClientOriginalName());
			Image::make($destinationPath.'/'.$image_show->getClientOriginalName())->resize(1200,600)->save($path);
					
			$blog=$this->blogRepository->store($request->all(),$image->getClientOriginalName());
			return redirect('blog')->withOk("Le nouveau blog ".$blog->titre." a été crée.");
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog=$this->blogRepository->getById($id);
		$commentaire = DB::table('commentaires')->where('blog_id',$id)->get();
		return view('blog_show',compact('blog','commentaire'));
    }
	
	public function show_all()
    {
       $blogs = DB::table('blogs')->get();
		
	   return view('blog_show_all', ['blogs' => $blogs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=$this->blogRepository->getById($id);
		return view('blog_edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$image_show_all = $request->file('image');
			$image_show = $request->file('image');
		
			$destinationPath = public_path('images');
			$image->move($destinationPath,$image->getClientOriginalName()); // uploading file to given path
			
			$path = public_path('images/'. $image->getClientOriginalName());
			Image::make($destinationPath.'/'.$image->getClientOriginalName())->resize(650,350)->save($path);
			
			$path = public_path('images_show_all/'. $image_show_all->getClientOriginalName());		
			Image::make($destinationPath.'/'.$image_show_all->getClientOriginalName())->resize(850,450)->save($path);
		
			$path = public_path('images_show/'. $image_show->getClientOriginalName());
			Image::make($destinationPath.'/'.$image_show->getClientOriginalName())->resize(1200,600)->save($path);
		
			$image_update_name = $image->getClientOriginalName();
		}else{
			$blog=$this->blogRepository->getById($id);
			$image_update_name = $blog->picture;
		}
		
		
        $this->blogRepository->update($id,$request->all(),$image_update_name);
		$blog=$this->blogRepository->getById($id);
		return redirect('blog')->withOk("Le nouveau blog ".$blog->titre." a été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->blogRepository->destroy($id);
		return redirect()->back();
    }
}
