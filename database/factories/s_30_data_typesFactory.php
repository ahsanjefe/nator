<?php

namespace Database\Factories;

use App\Models\s_30_data_types;
use Illuminate\Database\Eloquent\Factories\Factory;

class s_30_data_typesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = s_30_data_types::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_name' => $this->faker->word
        ];
    }
}
