<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AndreController extends Controller
{

    public function index(){
        $movies = Movie::all();
        return view('homepage', compact('movies'));
    }

    public function detail($id){
        $movie = Movie::find($id);
        return view('detail', compact('movie'));
    }
    public function search(Request $request)
    {
        $query = $request->input('q');
        $movies = Movie::search($query);

        return view('search', ['movies' => $movies]);
    }
}
