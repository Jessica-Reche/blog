<?php
namespace App\Http\Controllers;
use App\Models\Comentario;
use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function __construct()
    {    
        //Middleware que permite acceder a los roles editor a su propio post y a los administradores a todos los posts
        $this->middleware('roles:editor,admin')->only(['edit', 'update']);
        //Middleware que permite acceder a los roles administradores a todos los posts
        $this->middleware('roles:admin')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
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
     * @return \Illuminate\Http\Response
     * @return  \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $usuarios = Usuario::all();
        return view('posts.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->titulo = $request->get('titulo');
        $post->contenido = $request->get('contenido');
        $post->usuario()->associate($request->get('usuario_id'));
        $post->save();
        return redirect()->route('posts.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @return  \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar el post
        Comentario::where('post_id', $id)->delete();
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }

    public function like($id)
    {
        $post = Post::findOrFail($id);
        $post->like = $post->like + 1;
        $post->save();
 
      
        return redirect()->route('posts.index');


    }





}