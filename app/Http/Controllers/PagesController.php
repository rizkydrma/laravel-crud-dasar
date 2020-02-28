<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $data = [
            'title' => 'Page Home'
        ];
        return view('index', $data);
    }

    public function about(){
        $data = [
            'title' => 'Page About',
            'name' => 'Rizky Darma R'
        ];

        return view('about', $data);
    }
}
