<?php 

namespace App\Traits;

trait HttpEvent 
{
    public static function success(String $message, $data) 
    {
        return [
            "StatusCode" => 200, 
            "Message" => $message,
            "data" => $data,
        ];
    }

    public static function failed($message, $code)
    {
        return [
            "StatusCode" => $code, 
            "Message" => $message,
        ];
    }


}
