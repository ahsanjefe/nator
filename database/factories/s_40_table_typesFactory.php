<?php

namespace Database\Factories;

use App\Models\s_40_table_types;
use Illuminate\Database\Eloquent\Factories\Factory;

class s_40_table_typesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = s_40_table_types::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'table_type' => $this->faker->word,
        'model' => $this->faker->word
        ];
    }
}
