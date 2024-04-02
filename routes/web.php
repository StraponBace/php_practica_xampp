<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/add_new_employee', [Controller\Site::class, 'add_new_employee']);
Route::add(['GET', 'POST'], '/add_employee', [Controller\Site::class, 'add_employee']);
Route::add(['GET', 'POST'], '/add_department', [Controller\Site::class, 'add_department']);
Route::add(['GET', 'POST'], '/attach_employee', [Controller\Site::class, 'attach_employee']);
Route::add(['GET', 'POST'], '/list_employees', [Controller\Site::class, 'list_employees']);


