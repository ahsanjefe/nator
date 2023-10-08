<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Creates_10_user_databasesAPIRequest;
use App\Http\Requests\API\Updates_10_user_databasesAPIRequest;
use App\Models\s_10_user_databases;
use App\Repositories\s_10_user_databasesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

class s_10_user_databasesAPIController extends AppBaseController
{

    private $s10UserDatabasesRepository;

    public function __construct(s_10_user_databasesRepository $s10UserDatabasesRepo)
    {
        $this->s10UserDatabasesRepository = $s10UserDatabasesRepo;
    }

    public function index(Request $request)
    {
        $s10UserDatabases = $this->s10UserDatabasesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($s10UserDatabases->toArray(), 'S 10 User Databases retrieved successfully');
    }

    public function store(Creates_10_user_databasesAPIRequest $request)
    {
        $input = $request->all();

        $s10UserDatabases = $this->s10UserDatabasesRepository->create($input);

        return $this->sendResponse($s10UserDatabases->toArray(), 'S 10 User Databases saved successfully');
    }

    public function show($id)
    {

        $s10UserDatabases = $this->s10UserDatabasesRepository->find($id);

        if (empty($s10UserDatabases)) {
            return $this->sendError('S 10 User Databases not found');
        }

        return $this->sendResponse($s10UserDatabases->toArray(), 'S 10 User Databases retrieved successfully');
    }

    public function update($id, Updates_10_user_databasesAPIRequest $request)
    {
        $input = $request->all();

        $s10UserDatabases = $this->s10UserDatabasesRepository->find($id);

        if (empty($s10UserDatabases)) {
            return $this->sendError('S 10 User Databases not found');
        }

        $s10UserDatabases = $this->s10UserDatabasesRepository->update($input, $id);

        return $this->sendResponse($s10UserDatabases->toArray(), 's_10_user_databases updated successfully');
    }

    public function destroy($id)
    {

        $s10UserDatabases = $this->s10UserDatabasesRepository->find($id);

        if (empty($s10UserDatabases)) {
            return $this->sendError('S 10 User Databases not found');
        }

        $s10UserDatabases->delete();

        return $this->sendSuccess('S 10 User Databases deleted successfully');
    }
}
