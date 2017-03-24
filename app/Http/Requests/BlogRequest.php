<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BlogRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titre'=>'required|min:5|max:255',
			'image'=>'required|image',
			'ville'=>'required|max:255',
			'pays'=>'required|max:255',
			'latitude'=>'required|numeric',
			'longitude'=>'required|numeric',
			'blog_text'=>'required',
        ];
    }
}
