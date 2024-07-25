<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = new Empresa();
        $empresas = Empresa::orderBy('id', 'DESC')
        ->paginate();

        return view('empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empresa = new Empresa();
        $fechaCaptura = $request->fecha_apertura;
        $fecha = Carbon::parse($fechaCaptura);
        $fechaTransformada = $fecha->format('Y-m-d');

        $empresa->nombre = $request->nombre;
        $empresa->slug = $request->slug;
        $empresa->direccion = $request->direccion;
        $empresa->fecha_apertura = $fechaTransformada;

        $empresa->save();

        return redirect()->route('empresas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        return view('empresas.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        return view('empresas.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        $fechaCaptura = $request->fecha_apertura;
        $fecha = Carbon::parse($fechaCaptura);
        $fechaTransformada = $fecha->format('Y-m-d');

        $empresa->nombre = $request->nombre;
        $empresa->slug = $request->slug;
        $empresa->direccion = $request->direccion;
        $empresa->fecha_apertura = $fechaTransformada;

        $empresa->save();
        return redirect()->route('empresas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();

        return redirect()->route('empresas.index');
    }
}
