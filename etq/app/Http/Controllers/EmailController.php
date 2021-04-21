<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;


class EmailController extends Controller
{
    
    public function send(Request $request){
        $data = [
            'name' => $request -> name,
            'surname' => $request -> surname,
            'file' => $request -> file('file')
        ];

        $to = 'nurgalievakamila7@gmail.com';

        Mail::to($to) -> send(new TestMail($data));
        
        return view('email');

        
    }
}
