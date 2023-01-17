<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Usuario;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos 3 posts para cada usuario
        Usuario::all()->each(function ($usuario) {
            Post::factory(3)->create([
                'usuario_id' => $usuario->id
            ]);
        });

    }
}
