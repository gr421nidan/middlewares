<?php

namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class AuthMiddleware
{
    public function handle(Request $request)
    {
        //Если пользователь не авторизован, то редирект на страницу входа
        if (!Auth::check()) {
            \Middlewares\app()->route->redirect('/login');
        }
    }
}
