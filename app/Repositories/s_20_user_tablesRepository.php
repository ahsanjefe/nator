<?php

namespace App\Repositories;

use App\Models\s_20_user_tables;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class s_20_user_tablesRepository extends BaseRepository
{

    protected $fieldSearchable = [
        'database_id',
        'name'
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return s_20_user_tables::class;
    }
}
