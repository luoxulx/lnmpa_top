<?php
/**
 * Created by PhpStorm.
 * User: gunma-php
 * Date: 2018/9/28
 * Time: 上午11:20
 */

namespace App\Admin\Controllers;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Post;
use Encore\Admin\Layout\Content;

class PostController extends BaseAdminController
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
            ->header('post list')
            ->description('post description')
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
            ->header('post Detail')
            ->description('post description')
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
            ->header('post Edit')
            ->description('post description')
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
            ->header('post Create')
            ->description('post description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post);

        $grid->id('ID')->sortable();
        $grid->column('user_id', 'user_id');
        $grid->column('type', 'type');
        $grid->column('top', 'top');
        $grid->column('comment_status', 'comment_status');
        $grid->column('recommend', 'recommend');
        $grid->column('view', 'view');
        $grid->column('title', 'title');
        $grid->column('source', 'source');
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
        $show = new Show(Post::findOrFail($id));

        $show->id('ID');
        $show->field('title', 'title');
        $show->field('content', 'content')->setEscape(false);
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
        $form = new Form(new Post);

        $form->display('id', 'ID');
        $form->text('title', 'title');
        $form->editor('content', 'content')->setElementClass('');
        $form->display('created_at', 'Created At');
        $form->display('updated_at', 'Updated At');

        return $form;
    }
}
