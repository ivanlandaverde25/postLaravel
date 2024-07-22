<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Metodo para listar todos los post creados, GET
    public function index(){
        $posts = Post::orderBy('id', 'DESC')
        ->get();
        return view('posts.index', compact('posts'));
    }
    
    // Metodo para mostrar la vista para crear un nuevo post, GET
    public function create(){
        return view('posts.create');
    }

    // Metodo para almacenar los datos dentro de la base de datos de un post, POST
    public function store(Request $request){
        $post = new Post();
        
        $post->titulo = $request->titulo;
        $post->categoria = $request->categoria;
        $post->detalle = $request->detalle;
        // $post->mostrar = $request->mostrar;
        if($request->activo == null){
            $post->mostrar = false;
        } else {
            $post->fecha_publicacion = $request->fecha_publicacion;
        }
        
        dd($post->mostrar);
        $post->save();
        return redirect('/posts');
    }

    // Metodo para editar un registro previamente creado
    public function edit($post){
        $post = Post::find($post);
        return $post;
    }
    
    // Metodo para mostrar un post en especifico, GET
    public function show($post){
        $posts = Post::find($post);
        return view('posts.show', compact('posts'));
    }
}
