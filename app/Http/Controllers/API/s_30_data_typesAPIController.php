<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Creates_30_data_typesAPIRequest;
use App\Http\Requests\API\Updates_30_data_typesAPIRequest;
use App\Models\s_30_data_types;
use App\Repositories\s_30_data_typesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

class s_30_data_typesAPIController extends AppBaseController
{

    private $s30DataTypesRepository;

    public function __construct(s_30_data_typesRepository $s30DataTypesRepo)
    {
        $this->s30DataTypesRepository = $s30DataTypesRepo;
    }

    public function index(Request $request)
    {
        $s30DataTypes = $this->s30DataTypesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($s30DataTypes->toArray(), 'S 30 Data Types retrieved successfully');
    }

    public function store(Creates_30_data_typesAPIRequest $request)
    {
        $input = $request->all();

        $s30DataTypes = $this->s30DataTypesRepository->create($input);

        return $this->sendResponse($s30DataTypes->toArray(), 'S 30 Data Types saved successfully');
    }

    public function show($id)
    {

        $s30DataTypes = $this->s30DataTypesRepository->find($id);

        if (empty($s30DataTypes)) {
            return $this->sendError('S 30 Data Types not found');
        }

        return $this->sendResponse($s30DataTypes->toArray(), 'S 30 Data Types retrieved successfully');
    }

    public function update($id, Updates_30_data_typesAPIRequest $request)
    {
        $input = $request->all();

        $s30DataTypes = $this->s30DataTypesRepository->find($id);

        if (empty($s30DataTypes)) {
            return $this->sendError('S 30 Data Types not found');
        }

        $s30DataTypes = $this->s30DataTypesRepository->update($input, $id);

        return $this->sendResponse($s30DataTypes->toArray(), 's_30_data_types updated successfully');
    }

    public function destroy($id)
    {

        $s30DataTypes = $this->s30DataTypesRepository->find($id);

        if (empty($s30DataTypes)) {
            return $this->sendError('S 30 Data Types not found');
        }

        $s30DataTypes->delete();

        return $this->sendSuccess('S 30 Data Types deleted successfully');
    }
}
