<?php

class Authenticator
{
    public function __construct()
    {
        session_start();
        
    }

    public function isLoggedIn()
    {
        if(isset($_SESSION['loggedIn']))
        {
            return $_SESSION['loggedIn'];
        }
        return false;
    }

    public function login($user, $password)
    {

        if($user == "Sean" && $password == "password123")
        {
            $_SESSION['loggedIn'] = true;
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        session_destroy();
    }


    
}