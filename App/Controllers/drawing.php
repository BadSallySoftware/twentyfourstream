<?php

error_reporting(E_ALL);

class DrawingController extends Controller
{
    
    public static function index()
    {
        global $auth;
        if(!$auth->isLoggedIn())
        {
             header('Location: '. "login");
        }
        
      
        Parent::render("drawing");

    }

    public static function selectWinner()
    {
        global $auth;
        if(!$auth->isLoggedIn())
        {
             header('Location: '. "login");
        }

        $prizeName = $_POST['prize'];
        $minForEntry = intval($_POST['minForEntry']);
        $maxEntries = intval($_POST['maxEntries']);

        include BASEPATH . "App\\Models\\donations.php";
        $donModel = new DonationsModel();

        $donors = $donModel->getDonors();
        
        $entries = [];

        
        foreach($donors as $donor)
        {
            $donorTotal = intval($donor['donated']);  //TODO: Make sure this isn't a performance/memory issue (Shouldn't be given the volume we're processing)
            if($donorTotal > $minForEntry )
            {
                $numEntries = intval(floor($donorTotal / $minForEntry));
                $entry = array(
                    'name' => $donor['name'],
                    'entries' => ($numEntries > $maxEntries) ? $maxEntries : $numEntries
                );
                array_push($entries, $entry);
            }
        }
        $pool = [];
        foreach($entries as $entry)
        {
            for($entryCount = 0; $entryCount < $entry['entries']; $entryCount++ )
            {
                array_push($pool, $entry['name']);
            }
        }

        $choice = rand(0, (count($pool) - 1));
        $pageData['prize'] = $prizeName;
        $pageData['winner'] = $pool[$choice];
        $pageData['entries'] = $entries;
        Parent::render("winner", $pageData);

    }
}

