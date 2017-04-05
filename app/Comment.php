<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	//TODO: add user, timestamp
	
	protected $fillable = ['content'];

    public function commentable()
    {
    	return $this->MorphTo();
    }
}
