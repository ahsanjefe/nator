<?php

namespace Database\Factories;

use App\Models\s_60_column_types;
use Illuminate\Database\Eloquent\Factories\Factory;

class s_60_column_typesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = s_60_column_types::class;

    public function definition()
    {
        static $num = 20;

        $num ++;

        return [
            'column_name' => 'Column_'. $num,
        'table_id' => 5,
        'table_type_id' => 1,
        'subType_id' => 1,
        'column_type_primary' => 1,
        'list' => null,
        'null' => null
        ];
    }
}
