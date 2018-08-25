<?php

error_reporting(E_ALL);

class UploadController extends Controller
{
    
    public static function index()
    {
        global $auth;
        if(!$auth->isLoggedIn())
        {
             header('Location: '. "login");
        }

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

           $donations = array();
            
             $file = fopen($_FILES['upload']['tmp_name'], "r");
             
             $lineArray = array("");
             
             while($lineArray[0] != "Name")
             {
                $lineArray = fgetcsv($file);
             }

             while(!feof($file))
             {
                $lineArray = fgetcsv($file);

                $date = strtok($lineArray[2] , ' ');

                $donation = array(
                    "name" => $lineArray[0],
                    "email" => $lineArray[1],
                    "datetime" => $date,
                    "message" => $lineArray[3],
                    "amount" => $lineArray[4]
                );
                array_push($donations,$donation);
            }
            

            include BASEPATH . "App\\Models\\donations.php";

            $donModel = new DonationsModel();

            if(!$donModel->updateDonations($donations))
            {
                echo $donModel->error();
            }

        }

        Parent::render("upload");
    }
}

