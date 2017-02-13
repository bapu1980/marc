<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Intervention\Image\Facades\Image; // Use this if you want facade style code
//use Intervention\Image\ImageManager // Use this if you don't want facade style code

class ImageController extends Controller
{
 
   	//showing form for uploading Image
   	public function create()
   	{
   		return view('images.create');
   	}

   	//saving image when form is posted
   	public function save(Request $request)
	{
        $image 			= 	$request->file('image');
        $resizedImage 	= 	$this->resize($image, 400,400);
        
        if(!$resizedImage)
        {
        	return redirect()->back()->withError('Could not resize Image');
        }
    	return redirect()->route('image.resized')->with('image_url', asset('images'). '/' .$resizedImage->basename);
	}
	public function show()
	{
		$image_url = session('image_url');
		
		return view('images.show', compact('image_url'));
	}
	
	private function resize($image, $size)
    {
    	try 
    	{
    		$extension 		= 	$image->getClientOriginalExtension();
    		$imageRealPath 	= 	$image->getRealPath();
    		$thumbName 		= 	'thumb_'. $image->getClientOriginalName();
	    	
	    	//$imageManager = new ImageManager(); // use this if you don't want facade style code
    		//$img = $imageManager->make($imageRealPath);
	    
	    	$img = Image::make($imageRealPath); // use this if you want facade style code
	    	$img->resize(intval($size), null, function($constraint) {
	    		 $constraint->aspectRatio();
	    	});
	    	return $img->save(public_path('images'). '/'. $thumbName);
    	}
    	catch(Exception $e)
    	{
    		return false;
    	}

    }

    
}
