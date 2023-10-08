<?php

namespace App\Repositories;

use App\Models\s_40_table_types;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class s_40_table_typesRepository extends BaseRepository
{

    protected $fieldSearchable = [
        'table_type',
        'model'
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return s_40_table_types::class;
    }
}
