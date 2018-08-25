<?php
    function redirect($url)
    {
        header('Location: '. $url);
    }

    function dump($variable, $die = true)
    {
        echo "<pre>";
        var_dump($variable);
        echo "</pre>";

        if($die)
        {
            exit();
        }
    }


    