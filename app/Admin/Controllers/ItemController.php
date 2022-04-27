<?php

namespace App\Admin\Controllers;

use App\Models\Item;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Item';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Item());

        $grid->column('id', __('Id'));
        $grid->column('seller_id', __('Seller id'));
        $grid->column('buyer_id', __('Buyer id'));
        $grid->column('secondary_category_id', __('Secondary category id'));
        $grid->column('item_condition_id', __('Item condition id'));
        $grid->column('name', __('Name'));
        $grid->column('image_file_name', __('Image file name'));
        $grid->column('description', __('Description'));
        $grid->column('price', __('Price'));
        $grid->column('state', __('State'));
        $grid->column('bought_at', __('Bought at'));
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
        $show = new Show(Item::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('seller_id', __('Seller id'));
        $show->field('buyer_id', __('Buyer id'));
        $show->field('secondary_category_id', __('Secondary category id'));
        $show->field('item_condition_id', __('Item condition id'));
        $show->field('name', __('Name'));
        $show->field('image_file_name', __('Image file name'));
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('state', __('State'));
        $show->field('bought_at', __('Bought at'));
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
        $form = new Form(new Item());

        $form->number('seller_id', __('Seller id'));
        $form->number('buyer_id', __('Buyer id'));
        $form->number('secondary_category_id', __('Secondary category id'));
        $form->number('item_condition_id', __('Item condition id'));
        $form->text('name', __('Name'));
        $form->text('image_file_name', __('Image file name'));
        $form->textarea('description', __('Description'));
        $form->number('price', __('Price'));
        $form->text('state', __('State'));
        $form->datetime('bought_at', __('Bought at'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
