<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comentario;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Comentario::class;
    public function definition()
    {
        return [
            'comentario' => fake()->text(),
            //se añade un usuario aleatorio
            'usuario_id' => Usuario::inRandomOrder()->first()->id,
            
            


        ];
    }
}
