<?php

namespace Database\Factories;

use App\Models\s_10_user_databases;
use Illuminate\Database\Eloquent\Factories\Factory;

class s_10_user_databasesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = s_10_user_databases::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $num = 20;

        $num ++;
        return [
            'user_id' => 3,
        'name' => 'Database_'.$num
        ];
    }
}
