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
            ->header('All categories')
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
            ->header('Create new category')
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
            ->header('Edit category')
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
        $form->number('order', 'order')->default(0);
        $form->text('title', 'title')->rules('required');
        $form->image('logo');
        $form->textarea('description')->rows(3)->rules('required');
        $form->display('created_at', 'Created At');
        $form->display('updated_at', 'Updated At');
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
