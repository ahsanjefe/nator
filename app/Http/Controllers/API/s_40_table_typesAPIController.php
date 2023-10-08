<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Creates_40_table_typesAPIRequest;
use App\Http\Requests\API\Updates_40_table_typesAPIRequest;
use App\Models\s_40_table_types;
use App\Repositories\s_40_table_typesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

class s_40_table_typesAPIController extends AppBaseController
{

    private $s40TableTypesRepository;

    public function __construct(s_40_table_typesRepository $s40TableTypesRepo)
    {
        $this->s40TableTypesRepository = $s40TableTypesRepo;
    }

    public function index(Request $request)
    {
        $s40TableTypes = $this->s40TableTypesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($s40TableTypes->toArray(), 'S 40 Table Types retrieved successfully');
    }

    public function store(Creates_40_table_typesAPIRequest $request)
    {
        $input = $request->all();

        $s40TableTypes = $this->s40TableTypesRepository->create($input);

        return $this->sendResponse($s40TableTypes->toArray(), 'S 40 Table Types saved successfully');
    }

    public function show($id)
    {

        $s40TableTypes = $this->s40TableTypesRepository->find($id);

        if (empty($s40TableTypes)) {
            return $this->sendError('S 40 Table Types not found');
        }

        return $this->sendResponse($s40TableTypes->toArray(), 'S 40 Table Types retrieved successfully');
    }

    public function update($id, Updates_40_table_typesAPIRequest $request)
    {
        $input = $request->all();

        $s40TableTypes = $this->s40TableTypesRepository->find($id);

        if (empty($s40TableTypes)) {
            return $this->sendError('S 40 Table Types not found');
        }

        $s40TableTypes = $this->s40TableTypesRepository->update($input, $id);

        return $this->sendResponse($s40TableTypes->toArray(), 's_40_table_types updated successfully');
    }

    public function destroy($id)
    {

        $s40TableTypes = $this->s40TableTypesRepository->find($id);

        if (empty($s40TableTypes)) {
            return $this->sendError('S 40 Table Types not found');
        }

        $s40TableTypes->delete();

        return $this->sendSuccess('S 40 Table Types deleted successfully');
    }
}
