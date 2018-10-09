<?php
/**
 * Created by PhpStorm.
 * User: gunma-php
 * Date: 2018/10/8
 * Time: 下午4:25
 */

namespace App\Admin\Controllers;

use Encore\Admin\Layout\Content;
use Encore\Admin\Widgets\Table;
use Encore\Admin\Widgets\Box;


class BladeEditController extends BaseAdminController
{

    public function index(Content $content)
    {

        $list = scandir(resource_path('views/frontend/'));
        $new_list = [];
        foreach ($list as $key=>$value) {
            //bytes
            if (true) {
                $new_list[$key]['num'] = $key;
                $new_list[$key]['file_name'] = $value;
                $new_list[$key]['file_size'] = filesize(resource_path('views/frontend/'.$value)).' bytes';
                $new_list[$key]['path'] = resource_path('views/frontend/'.$value);
                $new_list[$key]['action'] = '<a>xx</a>';
            }
        }
        unset($list);

        $table = new Table(
            ['编号', '文件名', '文件大小','路径', '查看&修改'],
            $new_list,
            ['table-condensed','table-bordered','table-responsive']
        );

        $content->header('frontend blade file');
        $content->description('frontend blade file');
        $content->row((new Box('frontend blade file', $table))->style('info')->solid());

        return $content;
    }
}
