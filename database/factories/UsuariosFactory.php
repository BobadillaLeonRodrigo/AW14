<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuarios>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'matricula'=>$this->faker->text(8),
            'img'=>$this->faker->imageUrl(),
            'nombre'=>$this->faker->text(50),
            'app'=>$this->faker->text(60),
            'apm'=>$this->faker->text(60),
            'fn'=>$this->faker->dateTimeBetween(),
            'email'=>$this->faker->text(70),
            'pass'=>$this->faker->text(10),
            'idt_usuario'=>$this->faker->numberBetween(1,5),
            'activo'=>$this->faker->text(15)
        ];
    }
}
