<?php

namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class Ueditor extends Field
{
    protected $view = 'admin.extensions.u-editor';

    protected static $js = [
        '/vendor/Ueditor/ueditor.config.js',
        '/vendor/Ueditor/ueditor.all.min.js',
        '/vendor/Ueditor/ueditor.parse.min.js',
        '/vendor/Ueditor/lang/zh-cn/zh-cn.js',
        //'/vendor/Ueditor/lang/en/en.js',
    ];

    public function render()
    {
        //$name = $this->formatName($this->column);
        $local = config('app.locale');

        $this->script = <<<EOT
window.UEDITOR_HOME_URL = ''
UE.delEditor('{$this->id}')
var ue = UE.getEditor('{$this->id}');
ue.ready(function() {
        ue.execCommand('serverparam', 'lang', '{$local}');
});

EOT;
        return parent::render();
    }
}
