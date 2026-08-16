<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {

        $name = 'Marcos';
        $habits = ['Exercise', 'Read', 'Meditate'];

        // return view('home', [
        //     'name' => $name,
        //     'habits' => $habits,
        // ]);

        return view('home', compact('name', 'habits'));

    }

    public function dashboard()
    {
        return view(view: 'dashboard');
    }
}
