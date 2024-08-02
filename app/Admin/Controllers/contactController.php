<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\contact;

class contactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new contact());

        $grid->column('id', __('Id'));
        $grid->column('email', __('Email'));
        $grid->column('phon', __('Phon'));
        $grid->column('birthday', __('Birthday'));
        $grid->column('location', __('Location'));
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
        $show = new Show(contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('email', __('Email'));
        $show->field('phon', __('Phon'));
        $show->field('birthday', __('Birthday'));
        $show->field('location', __('Location'));
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
        $form = new Form(new contact());

        $form->email('email', __('Email'));
        $form->text('phon', __('Phon'));
        $form->date('birthday', __('Birthday'))->default(date('Y-m-d'));
        $form->text('location', __('Location'));

        return $form;
    }
}
