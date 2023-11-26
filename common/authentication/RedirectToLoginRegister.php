<?php

namespace common\authentication;

class RedirectToLoginRegister
{
    public function __construct()
    {
        //nothing goes there
    }
    //After login redirect to home as user_type like admin.home=>admin home page or
    // home=>user home page
    public static function redirectToHome(){
        $user_type = (string) (auth()->user()->user_type);
        return match ($user_type){
            '1' => '/admin/home',
            default => '/home'
        };
    }

    //After logout redirect to login page as user_type
    //if admin then redirect to admin login page or usr login page
    public static function redirectToLogin($user_type = null){
        return match ($user_type){
            '1' => '/admin/login',
            default => '/login'
        };
    }
}
