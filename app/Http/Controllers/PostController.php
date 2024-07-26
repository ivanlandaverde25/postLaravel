<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Metodo para listar todos los post creados, GET
    public function index(){
        $posts = Post::orderBy('id', 'DESC')
        ->paginate();
        return view('posts.index', compact('posts'));
    }
    
    // Metodo para mostrar la vista para crear un nuevo post, GET
    public function create(){
        return view('posts.create');
    }

    // Metodo para almacenar los datos dentro de la base de datos de un post, POST
    public function store(Request $request){
        
        // Se puede realizar de manera masiva pero se deben configurar los campos fillables dentro del modelo
        Post::create($request->all());
        
        // O se puede realizar de manera normal en el caso que sean pocos campos
        // $post->titulo = $request->titulo;
        // $post->slug = $request->slug;
        // $post->categoria = $request->categoria;
        // $post->detalle = $request->detalle;

        // if($request->activo == null){
        //     $post->mostrar = false;
        // } else {
        //     $post->fecha_publicacion = Carbon::now();
        // }
        
        // $post->save();
        return redirect()->route('posts.index');
    }
    
    // Metodo para mostrar un post en especifico, GET
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    
    // Metodo para ver la vista de editar un registro previamente creado
    public function edit(Post $post){
        return  view('posts.edit', compact('post'));
    }

    // Metodo para actualizar un post creado y guardarlo en la base de datos
    public function update(Request $request, Post $post){

        // Actualizacion por medio de asignacion masiva
        $post->update($request->all());

        // $post->titulo = $request->titulo;
        // $post->slug = $request->slug;
        // $post->categoria = $request->categoria;
        // $post->detalle = $request->detalle;

        // if($request->activo == null){
        //     $post->mostrar = false;
        // } else {
        //     $post->fecha_publicacion = $request->Carbon::now();
        // }
        
        // $post->save();
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index');
    }
}
