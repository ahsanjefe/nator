<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Creates_50_subtypesAPIRequest;
use App\Http\Requests\API\Updates_50_subtypesAPIRequest;
use App\Models\s_50_subtypes;
use App\Repositories\s_50_subtypesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

class s_50_subtypesAPIController extends AppBaseController
{

    private $s50SubtypesRepository;

    public function __construct(s_50_subtypesRepository $s50SubtypesRepo)
    {
        $this->s50SubtypesRepository = $s50SubtypesRepo;
    }

    public function index(Request $request)
    {
        $s50Subtypes = $this->s50SubtypesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($s50Subtypes->toArray(), 'S 50 Subtypes retrieved successfully');
    }

    public function store(Creates_50_subtypesAPIRequest $request)
    {
        $input = $request->all();

        $s50Subtypes = $this->s50SubtypesRepository->create($input);

        return $this->sendResponse($s50Subtypes->toArray(), 'S 50 Subtypes saved successfully');
    }

    public function show($id)
    {

        $s50Subtypes = $this->s50SubtypesRepository->find($id);

        if (empty($s50Subtypes)) {
            return $this->sendError('S 50 Subtypes not found');
        }

        return $this->sendResponse($s50Subtypes->toArray(), 'S 50 Subtypes retrieved successfully');
    }

    public function update($id, Updates_50_subtypesAPIRequest $request)
    {
        $input = $request->all();

        $s50Subtypes = $this->s50SubtypesRepository->find($id);

        if (empty($s50Subtypes)) {
            return $this->sendError('S 50 Subtypes not found');
        }

        $s50Subtypes = $this->s50SubtypesRepository->update($input, $id);

        return $this->sendResponse($s50Subtypes->toArray(), 's_50_subtypes updated successfully');
    }

    public function destroy($id)
    {

        $s50Subtypes = $this->s50SubtypesRepository->find($id);

        if (empty($s50Subtypes)) {
            return $this->sendError('S 50 Subtypes not found');
        }

        $s50Subtypes->delete();

        return $this->sendSuccess('S 50 Subtypes deleted successfully');
    }
}
