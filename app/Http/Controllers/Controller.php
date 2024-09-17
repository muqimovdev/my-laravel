<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function getToken()
    {

        $headers = getallheaders();
        return (isset($headers['Token'])) ? $headers['Token'] : $headers['token'];
    }
}
