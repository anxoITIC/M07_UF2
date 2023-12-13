<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SignController extends Controller
{

    // Mostra la vista de Sign In.
    public function showSignIn($parametre1 = "Iniciar", $parametre2 = "sessió", $parametre3 = "de l'", $parametre4 = "usuari")
    {
        $title = "$parametre1 $parametre2 $parametre3 $parametre4";
        return view('signin')->with('title', $title);
    }

    // Mostra la vista de Sign Up.
    public function showSignUp($parametre1 = "Creació", $parametre2 = "d'usuari", $parametre3 = "nou")
    {
        $title = "$parametre1 $parametre2 $parametre3";
        return view('signup')->with('title', $title);
    }
}
