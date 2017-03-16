<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CommentaireRequest extends Request
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
            'nom'=>'required|max:255',
			'email'=>'required|email',
			'commentaire_text'=>'required|max:2500',
			//'g-recaptcha-response' => 'required|captcha',
        ];
    }
}
