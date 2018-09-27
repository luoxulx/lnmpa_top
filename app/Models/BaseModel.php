<?php
/**
 * Created by PhpStorm.
 * User: luoxulxT
 * Date: 2018/9/27
 * Time: 23:15
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{

    use SoftDeletes;
}