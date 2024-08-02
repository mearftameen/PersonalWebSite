<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Education1;

class EducationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Education1';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Education1());

        $grid->column('id', __('Id'));
        $grid->column('Education_name', __('Education name'));
        $grid->column('Education_date', __('Education date'));
        $grid->column('Education_end_date', __('Education end date'));
        $grid->column('Education_work', __('Education work'));
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
        $show = new Show(Education1::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Education_name', __('Education name'));
        $show->field('Education_date', __('Education date'));
        $show->field('Education_end_date', __('Education end date'));
        $show->field('Education_work', __('Education work'));
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
        $form = new Form(new Education1());

        $form->text('Education_name', __('Education name'));
        $form->date('Education_date', __('Education date'))->default(date('Y-m-d'));
        $form->date('Education_end_date', __('Education end date'))->default(date('Y-m-d'));
        $form->text('Education_work', __('Education work'));

        return $form;
    }
}
