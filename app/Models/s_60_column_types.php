<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class s_60_column_types extends Model
{

    use HasFactory;

    public $table = 's_60_column_types';

    public $timestamps = false;

    public $fillable = [
        'column_name',
        'table_id',
        'table_type_id',
        'subType_id',
        'column_type_primary',
        'list',
        'null'
    ];

    protected $casts = [
        'id' => 'integer',
        'column_name' => 'string',
        'table_id' => 'integer',
        'table_type_id' => 'integer',
        'subType_id' => 'integer',
        'column_type_primary' => 'integer',
        'list' => 'boolean',
        'null' => 'boolean'
    ];

    public static $rules = [
        'column_name' => 'nullable|string|max:255',
        'table_id' => 'required',
        'table_type_id' => 'required',
        'subType_id' => 'nullable',
        'column_type_primary' => 'required',
        'list' => 'nullable|boolean',
        'null' => 'nullable|boolean'
    ];

    public function table()
    {
        return $this->belongsTo(\App\Models\S20UserTable::class, 'table_id');
    }

    public function subtype()
    {
        return $this->belongsTo(\App\Models\S50Subtype::class, 'subType_id');
    }
}
