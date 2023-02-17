<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @return  \Illuminate\Contracts\View\View
     * @return  \Illuminate\Http\JsonResponse
     */
    public function index()
    {
       $posts = Post::get();
        return response()->json($posts, 200);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @return  \Illuminate\Contracts\View\View
     * @return  \Illuminate\Http\JsonResponse
     * 
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->titulo = $request->get('titulo');
        $post->contenido = $request->get('contenido');
        $post->usuario()->associate($request->get('usuario_id'));
        $post->save();
        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     * @return  \Illuminate\Contracts\View\View
     * @return  \Illuminate\Http\JsonResponse
     */
    public function show(Post $post)
    {
        return response()->json($post, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     * @return  \Illuminate\Contracts\View\View
     * @return  \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Post $post)
    {
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->save();
        return response()->json($post, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     * @return  \Illuminate\Contracts\View\View
     * @return  \Illuminate\Http\JsonResponse
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(null, 204);
    }
}
