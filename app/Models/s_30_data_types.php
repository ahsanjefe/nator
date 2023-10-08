<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class s_30_data_types extends Model
{

    use HasFactory;

    public $table = 's_30_data_types';

    public $timestamps = false;

    public $fillable = [
        'type_name'
    ];

    protected $casts = [
        'id' => 'integer',
        'type_name' => 'string'
    ];

    public static $rules = [
        'type_name' => 'nullable|string|max:255'
    ];

}
