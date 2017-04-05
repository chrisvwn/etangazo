<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Entity extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    protected $fillable = ['name', 'phone', 'dateofbirth', 'nationality', 'idtype', 'idnumber', 'gender_id', 'gender_id', 'birth_place', 'languages_spoken', 'color_hair', 'color_eyes', 'height_meters', 'weight_kgs', 'distinguish_mark', 'race', 'age'];

    //reports
    public function reports()
    {
        return $this->belongsToMany(Report::class, 'report_entities');
    }

    //photos
    public function photos()
    {
        return $this->MorphMany(Photo::class, 'photoable');
    }

    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    //comments
    public function comments()
    {
	return $this->hasMany(\Laravelista\Comments\Comments\Comment::class);
    }

//    public function addComment(Comment $comment)
//    {
//        return $this->comments()->save($comment);
//    }

       
}
