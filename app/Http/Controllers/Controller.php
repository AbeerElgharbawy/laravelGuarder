<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function showHome(){
        return view('testHome');
    }
    public function showAbout(){
        return view('about');
    }
    public function showContact(){
        return view('contact');
    }
    public function showGuard(){
        return view('guard');
    }
    public function showService(){
        return view('service');
    }
    
}
