<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Creates_20_user_tablesAPIRequest;
use App\Http\Requests\API\Updates_20_user_tablesAPIRequest;
use App\Models\s_20_user_tables;
use App\Repositories\s_20_user_tablesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

class s_20_user_tablesAPIController extends AppBaseController
{

    private $s20UserTablesRepository;

    public function __construct(s_20_user_tablesRepository $s20UserTablesRepo)
    {
        $this->s20UserTablesRepository = $s20UserTablesRepo;
    }

    public function index(Request $request)
    {
        $s20UserTables = $this->s20UserTablesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($s20UserTables->toArray(), 'S 20 User Tables retrieved successfully');
    }

    public function store(Creates_20_user_tablesAPIRequest $request)
    {
        $input = $request->all();

        $s20UserTables = $this->s20UserTablesRepository->create($input);

        return $this->sendResponse($s20UserTables->toArray(), 'S 20 User Tables saved successfully');
    }

    public function show($id)
    {

        $s20UserTables = $this->s20UserTablesRepository->find($id);

        if (empty($s20UserTables)) {
            return $this->sendError('S 20 User Tables not found');
        }

        return $this->sendResponse($s20UserTables->toArray(), 'S 20 User Tables retrieved successfully');
    }

    public function update($id, Updates_20_user_tablesAPIRequest $request)
    {
        $input = $request->all();

        $s20UserTables = $this->s20UserTablesRepository->find($id);

        if (empty($s20UserTables)) {
            return $this->sendError('S 20 User Tables not found');
        }

        $s20UserTables = $this->s20UserTablesRepository->update($input, $id);

        return $this->sendResponse($s20UserTables->toArray(), 's_20_user_tables updated successfully');
    }

    public function destroy($id)
    {

        $s20UserTables = $this->s20UserTablesRepository->find($id);

        if (empty($s20UserTables)) {
            return $this->sendError('S 20 User Tables not found');
        }

        $s20UserTables->delete();

        return $this->sendSuccess('S 20 User Tables deleted successfully');
    }
}
