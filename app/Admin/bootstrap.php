<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */
// lx-views
app('view')->prependNamespace('admin', resource_path('views/admin'));
// lx-cdn2
//\Encore\Admin\Admin::css([
//    'http://cdn2.lnmpa.top/uslx/AdminLTE/bootstrap/css/bootstrap.min.css',
//    'http://cdn2.lnmpa.top/uslx/font-awesome/css/font-awesome.min.css',
//    'http://cdn2.lnmpa.top/uslx/laravel-admin/laravel-admin.css',
//    'http://cdn2.lnmpa.top/uslx/nprogress/nprogress.css',
//    'http://cdn2.lnmpa.top/uslx/sweetalert2/dist/sweetalert2.css',
//    'http://cdn2.lnmpa.top/uslx/nestable/nestable.css',
//    'http://cdn2.lnmpa.top/uslx/toastr/build/toastr.min.css',
//    'http://cdn2.lnmpa.top/uslx/bootstrap3-editable/css/bootstrap-editable.css',
//    'http://cdn2.lnmpa.top/uslx/google-fonts/fonts.css',
//    'http://cdn2.lnmpa.top/uslx/AdminLTE/dist/css/AdminLTE.min.css',
//]);
//\Encore\Admin\Admin::$jQuery = 'http://cdn2.lnmpa.top/uslx/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js';
//\Encore\Admin\Admin::js([
//    'http://cdn2.lnmpa.top/uslx/AdminLTE/bootstrap/js/bootstrap.min.js',
//    'http://cdn2.lnmpa.top/uslx/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js',
//    'http://cdn2.lnmpa.top/uslx/AdminLTE/dist/js/app.min.js',
//    'http://cdn2.lnmpa.top/uslx/jquery-pjax/jquery.pjax.js',
//    'http://cdn2.lnmpa.top/uslx/nprogress/nprogress.js',
//    'http://cdn2.lnmpa.top/uslx/nestable/jquery.nestable.js',
//    'http://cdn2.lnmpa.top/uslx/toastr/build/toastr.min.js',
//    'http://cdn2.lnmpa.top/uslx/bootstrap3-editable/js/bootstrap-editable.min.js',
//    'http://cdn2.lnmpa.top/uslx/sweetalert2/dist/sweetalert2.min.js',
//    'http://cdn2.lnmpa.top/uslx/laravel-admin/laravel-admin.js',
//]);
// lx-cdn-end
Encore\Admin\Form::forget(['map', 'editor']);
// lx-new
Encore\Admin\Form::extend('editor', App\Admin\Extensions\Ueditor::class);

