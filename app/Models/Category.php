<?php
/**
 * Created by PhpStorm.
 * User: gunma-php
 * Date: 2018/9/28
 * Time: 上午11:29
 */

namespace App\Models;


class Category extends BaseModel
{
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }

}
