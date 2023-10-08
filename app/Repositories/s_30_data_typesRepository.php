<?php

namespace App\Repositories;

use App\Models\s_30_data_types;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class s_30_data_typesRepository extends BaseRepository
{

    protected $fieldSearchable = [
        'type_name'
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return s_30_data_types::class;
    }
}
