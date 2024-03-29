<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Post;

class RolCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $rol, ...$roles)
    {
        $route = $request->route()->getName();
        $user = auth()->user();
        $existeUsuario = isset($user->rol);
        if ($existeUsuario && in_array($user->rol, $roles)) {
            return $next($request);
        }
        if ($existeUsuario) {
            switch ($user->rol) {
                case 'admin':
                    if (in_array($route, ['posts.create', 'posts.store'])) {
                        return $next($request);
                    }
                    break;
                case 'editor':
                    if (in_array($route, ['posts.edit', 'posts.update', 'posts.destroy'])) {
                        $post = Post::find($request->route()->parameter('post'));
                        if ($post->usuario_id == $user->id) {
                            return $next($request);
                        }
                    } elseif (in_array($route, ['posts.create', 'posts.store'])) {
                        return $next($request);
                    }
                    break;
                default:
                    if (in_array($user->rol, $roles)) {
                        return $next($request);
                    }
                    break;
            }
        }


        return redirect('/');

    }



}