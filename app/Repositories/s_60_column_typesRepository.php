<?php

namespace App\Repositories;

use App\Models\s_60_column_types;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class s_60_column_typesRepository extends BaseRepository
{

    protected $fieldSearchable = [
        'column_name',
        'table_id',
        'table_type_id',
        'subType_id',
        'column_type_primary',
        'list',
        'null'
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return s_60_column_types::class;
    }
}
