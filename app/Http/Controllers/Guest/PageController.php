<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();

        // dd($movies);

        return view('guest.home', compact('movies'));
    }
    public function about() {
        return view('guest.about');
    }
    public function contacts() {
        return view('guest.contacts');
    }
}
