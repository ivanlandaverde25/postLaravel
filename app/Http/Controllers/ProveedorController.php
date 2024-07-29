<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProveedorRequest;
use App\Http\Requests\UpdateProveedorRequest;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = new Proveedor();
        $proveedores = Proveedor::orderBy('id', 'DESC')
            ->paginate();
        
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProveedorRequest $request)
    {
        // $request->validate([
        //     'nombre' => 'required|string|min:3|max:255',
        //     'nombre_corto' => 'required|string|min:2|max:25',
        //     'direccion' => 'required|string|min:15|max:300',
        //     'telefono' => 'required|string',
        //     'slug' => 'required|string|min:3,max:255|unique:proveedores,slug'
        // ]);
        
        Proveedor::create($request->all());
        return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        return view('proveedores.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'nombre' => 'required|string|min:3|max:255',
            'nombre_corto' => 'required|string|min:2|max:25',
            'direccion' => 'required|string|min:15|max:300',
            'telefono' => 'required|string',
            'slug' => "required|string|min:3,max:255|unique:proveedores,slug,{$proveedor->id}",
        ]);

        $proveedor->update($request->all());
        return redirect()->route('proveedores.show', $proveedor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedores.index');
    }
}
