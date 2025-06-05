<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {
        return view('alumno.search');
    }

    public function search(Request $request)
    {
        $request->validate(['Nombre' => 'required|string|max:255']);

        $alumnos = Alumno::where('Nombre', 'like', '%' . $request->Nombre . '%')->get();

        return view('alumno.search', compact('alumnos'));
    }

    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumno.edit', compact('alumno'));
    }

    
}
