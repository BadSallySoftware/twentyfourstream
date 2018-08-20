<?php

class LoginController extends Controller
{
    public static function index()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $password = $_POST['bspass'];
            $username = $_POST['bsuser'];

            global $auth;
            $auth->login($username, $password);
            header('Location: '. "home");

        }else{
            $vars = array("title" => "Login");
            Parent::render("login", $vars);
        }
    }
}
