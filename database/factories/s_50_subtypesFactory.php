<?php

namespace Database\Factories;

use App\Models\s_50_subtypes;
use Illuminate\Database\Eloquent\Factories\Factory;

class s_50_subtypesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = s_50_subtypes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subtype_name' => $this->faker->word,
        'description' => $this->faker->word
        ];
    }
}
