<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class s_10_user_databases extends Model
{

    use HasFactory;

    public $table = 's_10_user_databases';

    public $timestamps = false;

    public $fillable = [
        'user_id',
        'name'
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string'
    ];

    public static $rules = [
        'user_id' => 'required',
        'name' => 'nullable|string|max:255'
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function s20UserTables()
    {
        return $this->hasMany(\App\Models\S20UserTable::class, 'database_id');
    }
}
