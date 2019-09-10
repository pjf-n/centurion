<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function home()
    {
        return view('welcome', [
            'tasks' => [
                'sniff some beak',
                'pull some birds',
                'get a kebab',
                'glass your da'
            ],
            'foo' => 'bar'
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
