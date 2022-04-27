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
    $router->resource('/users', UserController::class);
    $router->resource('/items', ItemController::class);
    $router->resource('/item_conditions', ItemConditionController::class);
    $router->resource('/primary_categories', PrimaryCategoryController::class);
    $router->resource('/secondary_categories', SecondaryCategoryController::class);

});
