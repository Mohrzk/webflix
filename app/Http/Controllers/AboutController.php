<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function index()
    {
        return view('apropos', [
            'title' => 'webflix',
            'team' => [
                [
                    'name' => 'Fiorella',
                    'job' => 'CEO',
                    'image' => 'https://i.pravatar.cc/150?img=Fiorella'
    
                ],
                [
                    'name' => 'Toto',
                    'job' => 'CTO',
                    'image' => 'https://i.pravatar.cc/150?img=Toto'
    
                ],
            
            ],
        ]);
    }

    public function show($user)
    {
        if (! in_array($user, ['Fiorella', 'Toto'])){
            abort(404); // Renvoie une 404
        }


        return view('about-show', [
            'user' => $user,
        ]);

    }

}
