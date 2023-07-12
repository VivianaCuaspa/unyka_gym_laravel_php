<?php

namespace Database\Factories;

use App\Models\Suscripcion;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuscripcionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Suscripcion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'socio_id' => $this->faker->word,
        'tipo_suscripcion_id' => $this->faker->word,
        'fecha_inicio' => $this->faker->word,
        'fecha_fin' => $this->faker->word,
        'estado' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
