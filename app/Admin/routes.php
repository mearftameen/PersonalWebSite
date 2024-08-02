<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('about-mes', AboutMeController::class);
    $router->resource('what-imboings', whatImboingController::class);
    $router->resource('testimonials', TestimonialsController::class);
    $router->resource('contacts', contactController::class);
    $router->resource('education1s', EducationController::class);
    $router->resource('skills', skillsController::class);
    $router->resource('projects', projectsController::class);
    $router->resource('courses_and_unesthestalls', courses_and_unesthestallsController::class);
    $router->resource('masseges', massegesController::class);
    $router->resource('profiles', profileController::class);
});
