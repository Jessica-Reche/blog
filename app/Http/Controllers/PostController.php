<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @return  \Illuminate\Contracts\View\View
     * 
     */
    public function index()
    {
        $posts = Post::with(['usuario', 'comentarios'])->orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // redirige a la pagina de inicio
        return redirect()->route('inicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *  @return  \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect()->route('inicio');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar el post
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }


    public function nuevoPrueba()
    {
        $numero = rand(1, 100);
        $post = new Post();
        $post->titulo = "Titulo " . $numero;
        $post->contenido = "Contenido " . $numero;
        $post->usuario_id =rand(1, 3); 
        $post->save();
        return redirect()->route('posts.index');


        


    }


    public function editarPrueba($id)
    {


        $posts = Post::findOrFail($id);
        $numero = rand(1, 100);

        $posts->titulo = "Titulo " . $numero;
        $posts->contenido = "Contenido " . $numero;



        $posts->save();

        return redirect()->route('posts.index');





    }
}