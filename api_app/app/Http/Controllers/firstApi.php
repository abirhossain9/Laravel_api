<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstApi extends Controller
{
    function getData(){
        return ["name"=>"Md Abir Hossain","email" => "abirhasan282@gmail.com","phone"=>"01624358055"];
    }
}
