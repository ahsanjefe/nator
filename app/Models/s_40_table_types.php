<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class s_40_table_types extends Model
{

    use HasFactory;

    public $table = 's_40_table_types';

    public $timestamps = false;

    public $fillable = [
        'table_type',
        'model'
    ];

    protected $casts = [
        'id' => 'integer',
        'table_type' => 'boolean',
        'model' => 'string'
    ];

    public static $rules = [
        'table_type' => 'required|boolean',
        'model' => 'nullable|string|max:255'
    ];

}
