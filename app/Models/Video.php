<?php
/**
 * Created by PhpStorm.
 * User: luoxulxT
 * Date: 2018/10/1
 * Time: 0:49
 */

namespace App\Models;


class Video extends BaseModel
{
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable', 'taggables');
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }

}