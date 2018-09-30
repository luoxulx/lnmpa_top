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
        //$grid->model()->ordered();
        $grid->id('ID')->sortable();
        $grid->column('user_id', '用户ID');
        $grid->column('type', '类型');
        $grid->column('top', '置顶');
        $grid->column('recommend', '推荐');
        $grid->column('comment_status', '评论?');
        $grid->column('view', '点击');
        $grid->column('title', '标题');
        $grid->column('source', '来源');
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
        $show->field('user_id', '用户ID');
        $show->field('type', '类型');
        $show->field('top', '置顶');
        $show->field('recommend', '推荐');
        $show->field('comment_status', '评论?');
        $show->field('view', '点击');
        $show->field('source', '来源');
        $show->field('title', '标题');
        $show->field('thumbnail', 'img');
        $show->field('content', '内容')->setEscape(false);
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
        $current_user = \Encore\Admin\Facades\Admin::user()->id;
        $form = new Form(new Post);

        $form->display('id', 'ID');
        $form->hidden('user_id', '当前用户ID')->value($current_user);
        $form->radio('type', '类型')->options([1=>'内容', 2=>'页面'])->default(1);
        $form->radio('top', '置顶')->options([0=>'否', 1=>'是'])->default(0);
        $form->radio('recommend', '推荐')->options([0=>'否', 1=>'是'])->default(0);
        $form->radio('comment_status', '评论?')->options([0=>'否', 1=>'是'])->default(1);
        $form->text('source', '来源');
        $form->text('title', '标题')->rules(['required'], ['请填写标题']);
        //$form->select('category', '分类')->options(\App\Models\Category::all()->pluck('title', 'id'));
        $form->listbox('tags')->options(\App\Models\Tag::all()->pluck('name', 'id'))->settings(['selectorMinimalHeight' => 175]);
        $form->image('thumbnail', '缩略图');
        $form->textarea('description', '描述')->rows(4);
        $form->editor('content', '内容');
        $form->display('created_at', 'Created At');
        $form->display('updated_at', 'Updated At');

        return $form;
    }
}
