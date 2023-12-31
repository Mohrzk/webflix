<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'name' => 'Fiorella',
            'games' => [
                'Elden Ring',
                'Call of Duty',
                'FC24',
            ],
        ]);
    }

    public function friend(Request $request, $friend = null) 
    {
        return view('presentation', [
            'age' => Carbon::parse('2019-12-31')->age,
            'friend' => ucfirst($friend),
            'color' => $request->color,
    
        ]);

    }
}
