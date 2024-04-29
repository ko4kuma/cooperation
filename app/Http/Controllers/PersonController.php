<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $name = "Fajriyyah Saty N";
        $grade = 75;
        return view('people.index', compact('name', 'grade'));
    }
    // method untuk memanggil form
    public function create()
    {
        return view('people.create');
    }
    // method untuk mengambil inputan form
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $name = $request->name;

        return view('people.show', compact('name'));
    }
}
