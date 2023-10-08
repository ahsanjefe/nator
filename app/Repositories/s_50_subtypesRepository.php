<?php

namespace App\Repositories;

use App\Models\s_50_subtypes;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class s_50_subtypesRepository extends BaseRepository
{

    protected $fieldSearchable = [
        'subtype_name',
        'description'
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return s_50_subtypes::class;
    }
}
