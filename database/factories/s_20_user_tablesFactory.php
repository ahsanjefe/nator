<?php

namespace Database\Factories;

use App\Models\s_20_user_tables;
use Illuminate\Database\Eloquent\Factories\Factory;

class s_20_user_tablesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = s_20_user_tables::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        static $num = 15;

        $num ++;
        return [
            'database_id' => 4,
        'name' => 'Table_'. $num
        ];
    }
}
