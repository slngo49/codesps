<?php

namespace App\Http\Controllers;


use App\Name;

class NamesController extends Controller
{

    public function index()
    {
        $names = Name::all();

        return view('names.index', compact('names'));
    }

    public function show(Name $name)
    {

        return view('names.show', compact('name'));
    }
     
    public function create()
    {
        return view('names.create');
    }
    
    public function store()
    {
        $this->validate(request(), [

            'title' => 'required|min: 3'
        ]);
        Name::create(request(['title']));

        return redirect('/');
    }
}
