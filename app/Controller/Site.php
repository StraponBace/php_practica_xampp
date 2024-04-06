<?php

namespace Controller;

use Model\Department;
use Model\Employee;
use Model\Role;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;


class Site
{
    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }

        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
//        var_dump($request->all());die();

        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function add_department(Request $request): string
    {
        if($request->method === 'GET') {
            return new View('site.add_department');
        }
        if ($request->method === 'POST' && Department::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.add_department', ['message' => 'исправить message']);
    }

    public function add_employee(Request $request): string
    {
        if($request->method === 'GET') {
            return new View('site.add_employee');
        }
        if ($request->method === 'POST' && Employee::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.add_employee', ['message' => 'исправить message']);
    }

    public function attach_employee(Request $request): string
    {
        if($request->method === 'GET') {
            return new View('site.attach_employee');
        }
        return new View('site.attach_employee', ['message' => 'исправить message']);
    }

    public function list_employees(Request $request): string
    {
        if($request->method === 'GET') {
            return new View('site.list_employees');
        }
        return new View('site.list_employees', ['message' => 'исправить message']);
    }

    public function list_employees_compound(Request $request): string
    {
        if($request->method === 'GET') {
            return new View('site.list_employees_compound');
        }
        return new View('site.list_employees_compound', ['message' => 'исправить message']);
    }

    public function employees_age(Request $request): string
    {
        if($request->method === 'GET') {
            return new View('site.employees_age');
        }
        return new View('site.employees_age', ['message' => 'исправить message']);
    }
}