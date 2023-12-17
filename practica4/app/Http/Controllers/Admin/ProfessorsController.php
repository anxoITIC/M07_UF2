<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Professor;
use App\Http\Controllers\Controller;


class ProfessorsController extends Controller
{
    public function index()
    {
        //RECUPERA ELS PROFESSORS DE LA BBDD
        $professor = Professor::all();

        //MOSTRA LA VIEW DE TOTS ELS PROFESSORS
        return view('Admin.professorat', compact('professor'));
    }

    //FUNCIÓ QUE CREA LA INFORMACIÓ
    public function create(Request $request)
    {
        //MOSTRA LA VIEW DE CREACIÓ D'UN NOU ALUMNE
        return view('Admin.professorat_create');
    }

    //FUNCIÓ QUE GUARDA LA INFORMACIÓ
    public function store(Request $request)
    {
        $professor = new Professor;
        //ASSIGNACIÓ DE DADES
        $professor->name = $request->input('name');
        $professor->surname = $request->input('surname');
        $professor->email = $request->input('email');
        

        //GUARDEM LA INFO
        $professor->save();
        //MOSTREM LA VIEW DELS PROFESSORS AMB ELS RESULTATS
        return view('Admin.professorat', compact('professor'));

    }

    public function show(Professor $professor)
    {
        //MOSTRA LA VIEW DEL PROFESSOR SELECCIONAT
        return view('Admin.professorat_show', compact('professor'));
    }

    public function edit(Professor $professor)
    {
        //MOSTRA LA VIEW PER EDITAR EL PROFESSOR SELECCIONAT
        return view('Admin.professorat_edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
        ]);

        $professor->update($request->all());
    }

    public function destroy(Professor $professor)
    {
        //ELIMINA EL PROFESSOR SELECCIONAT
        $professor->delete();

        //TORNA A LA VIEW I MOSTRA UN MISSATGE 
        return redirect()->route('professor.index')->with('success', 'Professor eliminat correctament');
    }

}
