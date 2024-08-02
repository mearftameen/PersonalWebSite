<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\courses_and_unesthestalls;

class courses_and_unesthestallsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'courses_and_unesthestalls';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new courses_and_unesthestalls());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('date', __('Date'));
        $grid->column('end_date', __('End date'));
        $grid->column('num_hours', __('Num hours'));
        $grid->column('name', __('Name'));
        $grid->column('details', __('Details'));
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
        $show = new Show(courses_and_unesthestalls::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('date', __('Date'));
        $show->field('end_date', __('End date'));
        $show->field('num_hours', __('Num hours'));
        $show->field('name', __('Name'));
        $show->field('details', __('Details'));
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
        $form = new Form(new courses_and_unesthestalls());

        $form->image('image', __('Image'));
        $form->text('date', __('Date'));
        $form->text('end_date', __('End date'));
        $form->number('num_hours', __('Num hours'));
        $form->text('name', __('Name'));
        $form->text('details', __('Details'));

        return $form;
    }
}
