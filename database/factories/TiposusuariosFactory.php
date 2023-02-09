<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tiposusuarios>
 */
class TiposusuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'clave'=>$this->faker->text(8),
            'nombre'=>$this->faker->text(50),
            'detalle'=>$this->faker->text(50),
            'activo'=>$this->faker->text(15)
            
        ];
    }
}
