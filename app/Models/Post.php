<?php
/**
 * Created by PhpStorm.
 * User: gunma-php
 * Date: 2018/9/28
 * Time: 上午11:28
 */

namespace App\Models;


class Post extends BaseModel
{
    protected $casts = [
        'content' => 'array',
    ];

    public function setContentAttribute($value)
    {
        $data = [
            'raw' => strip_tags($value),
            'html' => $value,
        ];
        $this->attributes['content'] = json_encode($data);
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }
    public function getContentAttribute($value)
    {
        $data = json_decode($value, true);
        return $this->attributes['content'] = $data['html'];
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

    public function scopeHot($query)
    {
        return $query->where('hot', 1);
    }
    public function scopeUnhot($query)
    {
        return $query->where('hot', 1);
    }

    public function scopeRecommend($query)
    {
        return $query->where('recommend', 1);
    }

    public function scopeUnrecommend($query)
    {
        return $query->where('released', 0);
    }
}
