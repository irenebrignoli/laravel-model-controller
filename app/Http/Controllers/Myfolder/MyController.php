<?php

namespace App\Http\Controllers\Myfolder;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}
