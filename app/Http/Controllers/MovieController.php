<?php

namespace App\Http\Controllers;
use App\models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    
    public function index(){
        $movies = Movie::all();
       
        $data =['movies' => $movies];
        return view('movies', $data);
    }
}
