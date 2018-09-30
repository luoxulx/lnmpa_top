<?php

/**
 *
 */
namespace App\Models;

class EditorTest extends BaseModel
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
}
