<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $tasks = [
            'Go to the store',
            'Got a bottle of milk',
            'Bring a bowl when coming',
            'Prepare the oath',
            'And lets eat'
        ];
        
        return view('welcome')->withTasks($tasks);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
