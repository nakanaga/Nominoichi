<?php

namespace App\Admin\Controllers;

use App\Models\SecondaryCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SecondaryCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SecondaryCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SecondaryCategory());

        $grid->column('id', __('Id'));
        $grid->column('primary_category_id', __('Primary category id'));
        $grid->column('name', __('Name'));
        $grid->column('sort_no', __('Sort no'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(SecondaryCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('primary_category_id', __('Primary category id'));
        $show->field('name', __('Name'));
        $show->field('sort_no', __('Sort no'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SecondaryCategory());

        $form->number('primary_category_id', __('Primary category id'));
        $form->text('name', __('Name'));
        $form->number('sort_no', __('Sort no'));

        return $form;
    }
}
