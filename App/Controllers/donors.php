<?php

error_reporting(E_ALL);

class DonorsController extends Controller
{
    
    public static function index()
    {
        global $auth;
        if(!$auth->isLoggedIn())
        {
             header('Location: '. "login");
        }


        include BASEPATH . "App\\Models\\donations.php";
        $donModel = new DonationsModel();

        $pageData['donors'] = $donModel->getDonors();
        

        Parent::render("donors", $pageData);
    }
}

