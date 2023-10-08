<?php

namespace App\Repositories;

use App\Models\s_10_user_databases;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class s_10_user_databasesRepository extends BaseRepository
{

    protected $fieldSearchable = [
        'user_id',
        'name'
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return s_10_user_databases::class;
    }
}
