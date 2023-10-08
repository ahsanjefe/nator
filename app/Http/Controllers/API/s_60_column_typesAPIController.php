<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Creates_60_column_typesAPIRequest;
use App\Http\Requests\API\Updates_60_column_typesAPIRequest;
use App\Models\s_60_column_types;
use App\Repositories\s_60_column_typesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

class s_60_column_typesAPIController extends AppBaseController
{

    private $s60ColumnTypesRepository;

    public function __construct(s_60_column_typesRepository $s60ColumnTypesRepo)
    {
        $this->s60ColumnTypesRepository = $s60ColumnTypesRepo;
    }

    public function index(Request $request)
    {
        $s60ColumnTypes = $this->s60ColumnTypesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($s60ColumnTypes->toArray(), 'S 60 Column Types retrieved successfully');
    }

    public function store(Creates_60_column_typesAPIRequest $request)
    {
        $input = $request->all();

        $s60ColumnTypes = $this->s60ColumnTypesRepository->create($input);

        return $this->sendResponse($s60ColumnTypes->toArray(), 'S 60 Column Types saved successfully');
    }

    public function show($id)
    {

        $s60ColumnTypes = $this->s60ColumnTypesRepository->find($id);

        if (empty($s60ColumnTypes)) {
            return $this->sendError('S 60 Column Types not found');
        }

        return $this->sendResponse($s60ColumnTypes->toArray(), 'S 60 Column Types retrieved successfully');
    }

    public function update($id, Updates_60_column_typesAPIRequest $request)
    {
        $input = $request->all();

        $s60ColumnTypes = $this->s60ColumnTypesRepository->find($id);

        if (empty($s60ColumnTypes)) {
            return $this->sendError('S 60 Column Types not found');
        }

        $s60ColumnTypes = $this->s60ColumnTypesRepository->update($input, $id);

        return $this->sendResponse($s60ColumnTypes->toArray(), 's_60_column_types updated successfully');
    }

    public function destroy($id)
    {

        $s60ColumnTypes = $this->s60ColumnTypesRepository->find($id);

        if (empty($s60ColumnTypes)) {
            return $this->sendError('S 60 Column Types not found');
        }

        $s60ColumnTypes->delete();

        return $this->sendSuccess('S 60 Column Types deleted successfully');
    }
}
