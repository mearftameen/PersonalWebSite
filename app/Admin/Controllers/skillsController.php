<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\skills;

class skillsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'skills';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new skills());

        $grid->column('id', __('Id'));
        $grid->column('skills_name', __('Skills name'));
        $grid->column('skills_value', __('Skills value'));
        $grid->column('skills_width', __('Skills width'));
        $grid->column('skills_int', __('Skills int'));
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
        $show = new Show(skills::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('skills_name', __('Skills name'));
        $show->field('skills_value', __('Skills value'));
        $show->field('skills_width', __('Skills width'));
        $show->field('skills_int', __('Skills int'));
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
        $form = new Form(new skills());

        $form->text('skills_name', __('Skills name'));
        $form->number('skills_value', __('Skills value'));
        $form->number('skills_width', __('Skills width'));
        $form->text('skills_int', __('Skills int'));

        return $form;
    }
}
