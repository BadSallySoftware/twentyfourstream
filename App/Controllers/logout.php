<?php

class LogoutController extends Controller
{
    public static function index()
    {
       
       global $auth;
       $auth->logout();
       redirect("login");
    }
    
}

