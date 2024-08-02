<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\projects;

class projectsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'projects';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new projects());

        $grid->column('id', __('Id'));
        $grid->column('data_category', __('Data category'));
        $grid->column('herf_project', __('Herf project'));
        $grid->column('image', __('Image'));
        $grid->column('project_name', __('Project name'));
        $grid->column('project_category', __('Project category'));
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
        $show = new Show(projects::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('data_category', __('Data category'));
        $show->field('herf_project', __('Herf project'));
        $show->field('image', __('Image'));
        $show->field('project_name', __('Project name'));
        $show->field('project_category', __('Project category'));
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
        $form = new Form(new projects());

        $form->text('data_category', __('Data category'));
        $form->text('herf_project', __('Herf project'));
        $form->image('image', __('Image'));
        $form->text('project_name', __('Project name'));
        $form->text('project_category', __('Project category'));

        return $form;
    }
}
