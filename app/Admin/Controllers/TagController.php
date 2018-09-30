<?php
/**
 * Created by PhpStorm.
 * User: gunma-php
 * Date: 2018/9/30
 * Time: 下午1:30
 */

namespace App\Admin\Controllers;

use App\Models\Tag;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;

class TagController extends BaseAdminController
{
    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Tag list')
            ->description('tag description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('tag Detail')
            ->description('tag description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('tag Edit')
            ->description('tag description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('tag Create')
            ->description('tag description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tag());

        $grid->id('ID')->sortable();
        $grid->column('hot', 'hot');
        $grid->column('recommend', 'recommend');
        $grid->column('name', 'name');
        $grid->column('color', 'color');
        $grid->column('description', 'description');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Tag::findOrFail($id));

        $show->id('ID');
        $show->field('hot', 'hot');
        $show->field('recommend', 'recommend');
        $show->field('name', 'name');
        $show->field('color', 'color');
        $show->field('description', 'description');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Tag());

        $form->display('id', 'ID');
        $form->radio('hot', 'hot')->options([0=>'否',1=>'是']);
        $form->radio('recommend', 'recommend')->options([0=>'否',1=>'是']);
        $form->text('name', 'name')->rules(['required'], ['必填']);
        $form->color('color', 'color');
        $form->textarea('description', 'description')->rows(3);
        $form->display('created_at', 'Created At');
        $form->display('updated_at', 'Updated At');

        return $form;
    }
}
