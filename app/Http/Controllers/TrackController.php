<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TrackController extends Controller
{
    public function index()
    {  
        $tracks = Track::where('display', true)->orderBy("artist")->get();
        //dd($tracks);    

        return Inertia::render('Track/Index', [
            'tracks' => $tracks,
        ]);
    }

    public function create()
    {
        dd('create');              
    }

    public function edit()
    {
    }
    
    public function show()
    {
    }

    public function store(Request $request)
    {
    }

    public function update(Request $request)
    {
    }   

    public function destroy()
    {
    }   

}
