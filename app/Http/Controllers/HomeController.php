<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        $menus = [
            [
                'name' => 'Home',
                'route' => 'home.index',
                'url' => route('home.index'),
            ],
            [
                'name' => 'Tasks',
                'route' => 'tasks',
                'url' => '#',
            ],
            [
                'name' => 'Freelancers',
                'route' => 'freelancers',
                'url' => '#',
            ],
            [
                'name' => 'About',
                'route' => 'about',
                'url' => '#',
            ],
        ];
        return view('home.index', compact('menus'));
    }
}
