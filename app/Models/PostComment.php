<?php
/**
 * Created by PhpStorm.
 * User: gunma-php
 * Date: 2018/9/28
 * Time: 下午7:28
 */

namespace App\Models;


class PostComment extends BaseModel
{

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }

    public function scopeOfPost($query, $post)
    {
        return $query->where('post_id', $post);
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
