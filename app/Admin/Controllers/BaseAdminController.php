<?php
/**
 * Created by PhpStorm.
 * User: gunma-php
 * Date: 2018/9/28
 * Time: 上午11:23
 */

namespace App\Admin\Controllers;


use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;

class BaseAdminController extends Controller
{

    use HasResourceActions;
}
