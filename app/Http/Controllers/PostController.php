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
        
        // Variables locales
        $dateTime = Carbon::now();
        $post = new Post();
        
        $post->titulo = $request->titulo;
        $post->categoria = $request->categoria;
        $post->detalle = $request->detalle;

        if($request->activo == null){
            $post->mostrar = false;
        } else {
            $post->fecha_publicacion = $dateTime;
        }
        
        $post->save();
        return redirect('/posts');
    }
    
    // Metodo para mostrar un post en especifico, GET
    public function show($post){
        $post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    
    // Metodo para ver la vista de editar un registro previamente creado
    public function edit($post){
        $post = Post::find($post);
        return  view('posts.edit', compact('post'));
    }

    // Metodo para actualizar un post creado y guardarlo en la base de datos
    public function update(Request $request, $post){
        $dateTime = Carbon::now();$dateTime = Carbon::now();
        $post = Post::find($post);

        $post->titulo = $request->titulo;
        $post->categoria = $request->categoria;
        $post->detalle = $request->detalle;

        if($request->activo == null){
            $post->mostrar = false;
        } else {
            $post->fecha_publicacion = $dateTime;
        }
        
        $post->save();
        return redirect("/posts/{$post->id}");
    }

    public function destoy($post){
        $post = Post::find($post);
        $post->delete();
        return redirect("/posts");
    }
}
