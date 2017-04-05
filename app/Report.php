<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravelista\Comments\Comments\Traits\Comments;

class Report extends Model
{
    use SoftDeletes;
    use Comments;

    protected $dates = ['created_at', 'updated_ate', 'deleted_at'];
    
    protected $fillable = ['type', 'title', 'contact_name', 'contact_phone', 'country_id', 'police_station', 'police_ref_number', 'event_date', 'country_area_id', 'description', 'user_id'];

    //entities
    public function entities()
    {
        return $this->belongsToMany(Entity::class, 'report_entities');
    }

    public function addEntity(Entity $entity)
    {
        return $this->entities()->save($entity);
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
//    public function comments()
//    {
//        return $this->MorphMany(Comment::class, 'commentable');
//    }
//
//    public function addComment(Comment $comment)
//    {
//        return $this->comments()->save($comment);
//    }

    public function comments()
    {
        return $this->hasMany(\Laravelista\Comments\Comments\Comment::class);
    }
}
