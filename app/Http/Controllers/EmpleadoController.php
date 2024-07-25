<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = new Empleado();
        $empleados = Empleado::orderBy('id', 'DESC')
        ->paginate();

        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();

        $empleado->nombres = $request->nombres;
        $empleado->apellidos = $request->apellidos;
        $empleado->slug = $request->slug;
        $empleado->telefono = $request->telefono;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->salario = $request->salario;

        $empleado->save();

        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        
        return view('empleados.show', ['empleado' => $empleado]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {

        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {

        $empleado->nombres = $request->nombres;
        $empleado->apellidos = $request->apellidos;
        $empleado->slug = $request->slug;
        $empleado->telefono = $request->telefono;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->salario = $request->salario;

        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index');
    }
}
