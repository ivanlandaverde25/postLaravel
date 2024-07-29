<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDependenciaRequest;
use App\Models\Dependencia;
use Illuminate\Http\Request;

class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dependencias = new Dependencia();
        $dependencias = Dependencia::orderBy('id', 'DESC')
            ->paginate();

        return view('dependencias.index', compact('dependencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dependencias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDependenciaRequest $request)
    {
        // $request->validate([
        //     'nombre' => 'required|string|min:5|max:255',
        //     'nombre_corto' => 'nullable|string|min:2|max:255',
        //     'tipo_dependencia' => 'required|string',
        //     'fecha_oficial' => 'required|date',
        //     'slug' => 'required|string|unique:dependencias,slug',
        // ]);

        Dependencia::create($request->all());
        return redirect()->route('dependencias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dependencia $dependencia)
    {
        return view('dependencias.show', compact('dependencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dependencia $dependencia)
    {
        return view('dependencias.edit', compact('dependencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dependencia $dependencia)
    {
        $request->validate([
            'nombre' => 'required|string|min:5|max:255',
            'nombre_corto' => 'nullable|string|min:2|max:255',
            'tipo_dependencia' => 'required|string|min:5|max:255',
            'fecha_oficial' => 'required|date',
            'slug' => "required|string|unique:dependencias,slug,{$dependencia->id}",
        ]);

        $dependencia->update($request->all());
        return redirect()->route('dependencias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dependencia $dependencia)
    {
        $dependencia->delete();
        return redirect()->route('dependencias.index');
    }
}
