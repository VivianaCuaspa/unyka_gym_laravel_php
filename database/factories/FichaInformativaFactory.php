<?php

namespace Database\Factories;

use App\Models\FichaInformativa;
use Illuminate\Database\Eloquent\Factories\Factory;

class FichaInformativaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FichaInformativa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nivel_actividad' => $this->faker->randomDigitNotNull,
        'frecuencia_alimentacion' => $this->faker->randomDigitNotNull,
        'intolerancias' => $this->faker->word,
        'alergias' => $this->faker->word,
        'preparacion_comidas' => $this->faker->word,
        'patologia' => $this->faker->word,
        'patología_familiar' => $this->faker->word,
        'medicacion' => $this->faker->word,
        'socio_id' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
