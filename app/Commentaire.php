<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
	public $timestamps=true;
	
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'commentaires';

}
