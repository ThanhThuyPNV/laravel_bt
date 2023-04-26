<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\signupRequest;
class signupController extends Controller
{
    //
    public function index()
    {
        return view('signup');
    }
    public function displayInfor(signupRequest $Request)
    {
        $User = [
            'name'=>$name = $Request -> input('name'),
            'age'=>$age = $Request -> input('age'),
            'date'=>$date = $Request -> input('date'),
            'phone'=>$phone = $Request -> input('phone'),
            'web'=>$web = $Request -> input('web'),
            'add'=>$add = $Request -> input('add')
        ];
        return view('signup')->with('user', $User);
    }
}
