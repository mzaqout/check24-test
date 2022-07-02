<?php

namespace App\Classes;

class Redirect
{
    public static function to($url, $message = null, $messageType = null)
    {
        if ($message) {
            $_SESSION['message']     = $message;
            $_SESSION['messageType'] = $messageType;
        }
        header("Location: $url");
        exit;
    }
}