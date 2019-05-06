<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Go to the store',
            'Go to the market',
            'Go to the work',
        ];

        return view('welcome', [
            'tasks' => $tasks,
            'foo' => 'Foobar',
        ]);
    }

    public function contact()
    {
        return view('contact');

    }

    public function about()
    {
        return view('about');

    }
}
