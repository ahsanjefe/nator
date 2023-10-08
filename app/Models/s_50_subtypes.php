<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class s_50_subtypes extends Model
{

    use HasFactory;

    public $table = 's_50_subtypes';

    public $timestamps = false;

    public $fillable = [
        'subtype_name',
        'description'
    ];

    protected $casts = [
        'id' => 'integer',
        'subtype_name' => 'string',
        'description' => 'string'
    ];

    public static $rules = [
        'subtype_name' => 'required|string|max:255',
        'description' => 'nullable|string|max:255'
    ];

    public function s60ColumnTypes()
    {
        return $this->hasMany(\App\Models\S60ColumnType::class, 'subType_id');
    }
}
