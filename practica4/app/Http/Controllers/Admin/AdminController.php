<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Variables per emmagatzemar les dades d'email i contrasenya
    private $adminEmail = 'test@test.com';
    private $adminPassword = 'test';


    /*
     * Gestiona l'autenticació dels usuaris.
     *
     * Aquesta funció verifica les credencials proporcionades per formulari,
     * i redirigeix l'usuari a la pàgina de benvinguda de l'administrador si les credencials són correctes.
     * En cas de credencials incorrectes, redirigeix l'usuari a la pàgina d'inici de sessió
     * amb un missatge d'error.
     */
    public function usuaris(Request $request)
    {
        // Obtenir les dades del formulari
        $email = $request->input('email');
        $password = $request->input('psw');

        // Verificar les dades
        if ($email === $this->adminEmail && $password === $this->adminPassword) {
            // Les credencials són correctes, redirigir a la pàgina de benvinguda
            return redirect()->route('admin_view');
        } else {

            // Les credencials no són correctes, redirigir al signin amb un missatge d'error
            $error = "Error credencials incorrectes";

            // Emmagatzemar el missatge d'error a la sessió perquè es pugui mostrar a la pàgina de signin
            session()->flash('error', $error);

            //Redirigim a la pagina de signin
            return redirect()->route('signin');
        }

    }


    // Mostra la vista associada a la pàgina d'administrador.
    public function showAdminView()
    {
        return view('Admin.admin_view');
    }

    // Mostra la vista dels centres
    public function centres()
    {
        $centres = [
            ['id' => 1, 'name' => 'ITIC', 'address' => 'Carrer Roc Boronat', 'cp' => '08020', 'city' => 'Barcelona'],
            ['id' => 2, 'name' => 'Joan Austria', 'address' => 'Carrer Selva de Mar', 'cp' => '08020', 'city' => 'Barcelona'],
        ];

        return view('Admin.centres')->with(['centres' => $centres]);
    }

    // Mostra la vista de l'alumnat
    public function alumnat()
    {
        $alumnat = [
            ['id' => 1, 'name' => 'Alex', 'surname' => 'Andr', 'rol' => 'Alumne', 'email' => 'alex@alex.com'],
            ['id' => 2, 'name' => 'Ana ', 'surname' => 'Perez', 'rol' => 'Alumne', 'email' => 'ana@ana.com'],
            ['id' => 3, 'name' => 'Eva', 'surname' => 'Garcia', 'rol' => 'Alumne', 'email' => 'eva@eva.com'],
            ['id' => 4, 'name' => 'Pol', 'surname' => 'Marti', 'rol' => 'Alumne', 'email' => 'pol@pol.com'],
        ];

        return view('Admin.alumnat')->with(['alumnat' => $alumnat]);
    }

    // Mostra la vista del professorat
    public function professorat()
    {
        $professorat = [
            ['id' => 1, 'name' => 'Jordi', 'surname' => 'Mas', 'rol' => 'Professor', 'email' => 'jordi@jordi.com'],
            ['id' => 2, 'name' => 'Miquel ', 'surname' => 'Ros', 'rol' => 'Professor', 'email' => 'miquel@miquel.com'],
            ['id' => 3, 'name' => 'Laura', 'surname' => 'Gomez', 'rol' => 'Professor', 'email' => 'laura@laura.com'],
            ['id' => 4, 'name' => 'Albert', 'surname' => 'Fernandez', 'rol' => 'Professor', 'email' => 'albert@albert.com'],
        ];

        return view('Admin.professorat')->with(['professorat' => $professorat]);
    }
}
