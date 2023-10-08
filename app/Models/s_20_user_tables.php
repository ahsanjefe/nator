<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class s_20_user_tables extends Model
{

    use HasFactory;

    public $table = 's_20_user_tables';

    public $timestamps = false;

    public $fillable = [
        'database_id',
        'name'
    ];

    protected $casts = [
        'id' => 'integer',
        'database_id' => 'integer',
        'name' => 'string'
    ];

    public static $rules = [
        'database_id' => 'required',
        'name' => 'nullable|string|max:255'
    ];

    public function database()
    {
        return $this->belongsTo(\App\Models\S10UserDatabase::class, 'database_id');
    }

    public function s60ColumnTypes()
    {
        return $this->hasMany(\App\Models\S60ColumnType::class, 'table_id');
    }
}
