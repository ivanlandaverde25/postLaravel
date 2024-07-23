<x-app-layout>

    <h1>Pagina General de Posts</h1>
    <a href="posts/create">
        Crear nuevo post
    </a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{$post->id}}">
                    {{$post->titulo}}
                </a>
            </li>    
        @endforeach
    </ul>

    {{$posts->links()}}

</x-app-layout>    
