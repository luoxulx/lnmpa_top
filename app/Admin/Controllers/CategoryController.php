<?php
/**
 * Created by PhpStorm.
 * User: gunma-php
 * Date: 2018/9/29
 * Time: 下午7:19
 */

namespace App\Admin\Controllers;

use Encore\Admin\Form;
use Encore\Admin\Tree;
use App\Models\Category;
use Encore\Admin\Layout\Content;


class CategoryController extends BaseAdminController
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('所有分类')
            ->body($this->tree());
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('创建新分类')
            ->body($this->form());
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('修改分类')
            ->body($this->form()->edit($id));
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category());
        $form->display('id', 'ID');
        $form->select('parent_id')->options(Category::selectOptions());
        $form->number('order', '排序')->default(0);
        $form->text('title', '标题')->rules('required');
        $form->image('logo');
        $form->textarea('description', '描述信息')->rows(3)->rules('required');
        $form->display('created_at', '创建时间');
        $form->display('updated_at', '更新时间');
        return $form;
    }


    /**
     * Make a grid builder.
     *
     * @return Tree
     */
    protected function tree()
    {
        return Category::tree(function (Tree $tree) {
            $tree->branch(function ($branch) {
                $branch['logo'] ? $src = config('app.url') . '/storage/' . $branch['logo'] : $src = config('admin.default_category_logo');
                $logo = "<img src='$src' style='max-width:30px;max-height:30px' class='img'/>";
                return "{$branch['id']} - {$branch['title']} $logo";
            });
        });
    }
}
