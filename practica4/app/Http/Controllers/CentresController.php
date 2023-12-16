<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centre;

class CentresController extends Controller
{
    public function index()
    {
        $centres = Centre::all();
        return view('Admin.centres', ['centres' => $centres]);
    }
    public function destroy(Centre $centre)
    {
        $centre->delete();
        return redirect()->route('centres');
    }

    public function create()
    {
        return view('Admin.add_centre');
    }
    public function store(Request $request)
    {
        $centre = new Centre();
        $centre->name = $request->input('name');
        $centre->address = $request->input('address');
        $centre->cp = $request->input('cp');
        $centre->city = $request->input('city');
        $centre->save();
        return redirect()->route('centres');
    }

    public function edit(Centre $centre)
    {
        $centre->name = request('name');
        $centre->address = request('address');
        $centre->cp = request('cp');
        $centre->city = request('city');
        $centre->save();
        return redirect()->route('centres');
        
    }

    public function show(Centre $centre)
    {
        return view('Admin.edit_centre', ['centre' => $centre]);
    }
    
        
}
