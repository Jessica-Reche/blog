<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comentario;
use App\Models\Post;


class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos 3 comentarios para cada post 
        Post::all()->each(function ($post) {
            Comentario::factory(3)->create([
                'post_id' => $post->id
            ]);
        });
     
        
    }
}
