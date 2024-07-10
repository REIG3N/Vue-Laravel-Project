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
        return Inertia::render('Track/Create');
    }

    public function edit()
    {
    }
    
    public function show()
    {
    }

    public function store(Request $request)
    {
        sleep(5);
        return redirect()->back();
    }

    public function update(Request $request)
    {
    }   

    public function destroy()
    {
    }   

}
