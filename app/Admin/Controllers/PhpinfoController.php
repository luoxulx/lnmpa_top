<?php
/**
 * Created by PhpStorm.
 * User: gunma-php
 * Date: 2018/10/2
 * Time: 下午11:02
 */

namespace App\Admin\Controllers;

use Encore\Admin\Layout\Content;

class PhpinfoController extends BaseAdminController
{

    public function index(Content $content)
    {
        $info = $this->toCollection();
        return $content->header('phpInfo header')
            ->description('phpInfo description')
            ->body(view('Phpinfo.index', compact('info')));
    }

    protected function toCollection()
    {
        ob_start();

        phpinfo(INFO_ALL);

        $phpinfo = ['phpinfo' => collect()];

        if (preg_match_all('#(?:<h2>(?:<a name=".*?">)?(.*?)(?:</a>)?</h2>)|(?:<tr(?: class=".*?")?><t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>)?)?</tr>)#s', ob_get_clean(), $matches, PREG_SET_ORDER)) {
            collect($matches)->each(function ($match) use (&$phpinfo) {
                if (strlen($match[1])) {
                    $phpinfo[$match[1]] = collect();
                } elseif (isset($match[3])) {
                    $keys = array_keys($phpinfo);
                    $phpinfo[end($keys)][$match[2]] = isset($match[4]) ? collect([$match[3], $match[4]]) : $match[3];
                } else {
                    $keys = array_keys($phpinfo);
                    $phpinfo[end($keys)][] = $match[2];
                }
            });
        }
        ob_end_clean();
        return collect($phpinfo);
    }

}
