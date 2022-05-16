<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Kanisa la Mungu Baba';
        return view('pages.index')->with('title',$title);
    }
}
