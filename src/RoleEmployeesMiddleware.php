<?php


use Src\Auth\Auth;
use Src\Request;

class RoleEmployeesMiddleware
{
    public function handle(Request $request)
    {
        //Если пользователь админ, то редирект на главную страницу админа
        if (Auth::checkRole()) {
            \Middlewares\app()->route->redirect('/hello');
        }
    }
}