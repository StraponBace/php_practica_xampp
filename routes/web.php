<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_employee', [Controller\Site::class, 'add_employee'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_department', [Controller\Site::class, 'add_department'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/attach_employee', [Controller\Site::class, 'attach_employee'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/list_employees', [Controller\Site::class, 'list_employees'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/list_employees_compound', [Controller\Site::class, 'list_employees_compound'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/employees_age', [Controller\Site::class, 'employees_age'])
    ->middleware('auth');


