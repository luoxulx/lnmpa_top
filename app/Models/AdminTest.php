<?php

/**
 * 
 */
namespace App\Models;

class AdminTest extends BaseModel
{

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts = [
        'content' => 'array',
    ];

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }

    public function setContentAttribute($value)
    {
        $data = [
            'raw' => strip_tags($value),
            'html' => $value,
        ];
        $this->attributes['content'] = json_encode($data);
    }

    public function getContentAttribute($value)
    {
        $data = json_decode($value, true);
        return $this->attributes['content'] = $data['html'];
    }
}