<?php

namespace App\Http\Controllers;
use DefStudio\Telegraph\Facades\Telegraph;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function messages(){
        Telegraph::message('this is great')->send();
    }
}
