<?php
/**
 * Created by PhpStorm.
 * User: luoxulx
 * Date: 2018/10/7
 * Time: 下午2:25
 */

if (!function_exists('url_asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @param  bool    $secure
     * @return string
     */
    function url_asset($path, $secure = null)
    {
        return asset($path, $secure);
    }
}
