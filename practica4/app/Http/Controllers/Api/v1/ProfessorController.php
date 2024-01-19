<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Tornem tots els professors en un json
        $professors = Professor::all();
        return response()->json([
            'professors' => $professors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Professor $professor)
    {
        //Tornem en un json la informació del professor
        return response()->json([
            'professors' => $professor
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professor $professor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professor $professor)
    {
        //Si el professor és eliminat correctament enviem una resposta json
        if ($professor->delete()) {
            return response()->json([
                "missatge" => "S'ha eliminat correctament"
            ]);
        }

    }
}