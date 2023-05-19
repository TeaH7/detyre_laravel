<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises =  Exercise::all();
        return view('exercises.index', ['exercises' => $exercises]);
    }

    public function create()
    {
        return view('exercises.create');
    }


    public function store(Request $request)
    {

        Exercise::create([
            'name' => $request->name,
            'body_part' => $request->body_part,
            'description' => $request->description
        ]);

        return redirect()->route('list');
    }


    public function edit(Exercise $exercise)
    {
        return view('exercises.edit', ['exercise' => $exercise]);
    }

    public function update(Request $request, Exercise $exercise)
    {

        $exercise->update([
            'name' => $request->name,
            'body_part' => $request->body_part,
            'description' => $request->description,
        ]);

        return redirect()->route("list");
    }

    public function show(Exercise $exercise)
    {
        return view('exercises.show', ['exercise' => $exercise]);
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();

        return redirect()->route('list');
    }
}
