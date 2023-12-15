<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumne;
use Illuminate\Http\Request;

class AlumnatController extends Controller
{
    /*
     * Mostra una llista dels alumnes.
     */
    public function index()
    {
        // Recupera tots els alumnes de la base de dades
        $alumnat = Alumne::all();

        // Retorna la vista amb la llista d'alumnes
        return view('Admin.alumnat', compact('alumnat'));
    }

    /*
     * Mostra el formulari per a crear un nou recurs.
     */
    public function create()
    {
        // Retorna la vista per a crear un nou alumne
        return view('Admin.alumnat_create');
    }

    /*
     * Emmagatzema un nou recurs creat a la base de dades.
     */
    public function store(Request $request)
    {
        // Valida les dades de la sol·licitud entrant
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
        ]);

        // Crea un nou alumne amb les dades validades
        Alumne::create($request->all());

        // Redirigeix a la pàgina d'índex amb un missatge d'èxit
        return redirect()->route('alumnat.index')->with('success', 'Alumne afegit amb èxit.');
    }

    /*
     * Mostra l'alumne especificat.
     */
    public function show(Alumne $alumne)
    {
        // Retorna la vista per mostrar els detalls d'un alumne específic
        return view('Admin.alumnat_show', compact('alumne'));
    }

    /*
     * Mostra el formulari per editar l'alumne especificat.
     */
    public function edit(Alumne $alumne)
    {
        // Retorna la vista per editar els detalls d'un alumne específic
        return view('Admin.alumnat_edit', compact('alumne'));
    }

    /*
     * Actualitza l'alumne especificat a la base de dades.
     */
    public function update(Request $request, Alumne $alumne)
    {
        // Valida les dades de la sol·licitud entrant
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
        ]);

        // Actualitza els detalls de l'alumne especificat
        $alumne->update($request->all());

        // Redirigeix a la pàgina d'índex amb un missatge d'èxit
        return redirect()->route('alumnat.index')->with('success', 'Alumne actualitzat correctament');
    }

    /*
     * Elimina el recurs especificat de la base de dades.
     */
    public function destroy(Alumne $alumne)
    {
        // Elimina l'alumne especificat de la base de dades
        $alumne->delete();

        // Redirigeix a la pàgina d'índex amb un missatge d'èxit
        return redirect()->route('alumnat.index')->with('success', 'Alumne eliminat correctament');
    }
}
