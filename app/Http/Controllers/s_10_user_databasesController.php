<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creates_10_user_databasesRequest;
use App\Http\Requests\Updates_10_user_databasesRequest;
use App\Repositories\s_10_user_databasesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class s_10_user_databasesController extends AppBaseController
{

    private $s10UserDatabasesRepository;

    public function __construct(s_10_user_databasesRepository $s10UserDatabasesRepo)
    {
        $this->s10UserDatabasesRepository = $s10UserDatabasesRepo;
    }

    public function index(Request $request)
    {
        $s10UserDatabases = $this->s10UserDatabasesRepository->all();

        return view('s_10_user_databases.index')
            ->with('s10UserDatabases', $s10UserDatabases);
    }

    public function create()
    {
        return view('s_10_user_databases.create');
    }

    public function store(Creates_10_user_databasesRequest $request)
    {
        $input = $request->all();

        $s10UserDatabases = $this->s10UserDatabasesRepository->create($input);

        Flash::success('S 10 User Databases saved successfully.');

        return redirect(route('s10UserDatabases.index'));
    }

    public function show($id)
    {
        $s10UserDatabases = $this->s10UserDatabasesRepository->find($id);

        if (empty($s10UserDatabases)) {
            Flash::error('S 10 User Databases not found');

            return redirect(route('s10UserDatabases.index'));
        }

        return view('s_10_user_databases.show')->with('s10UserDatabases', $s10UserDatabases);
    }

    public function edit($id)
    {
        $s10UserDatabases = $this->s10UserDatabasesRepository->find($id);

        if (empty($s10UserDatabases)) {
            Flash::error('S 10 User Databases not found');

            return redirect(route('s10UserDatabases.index'));
        }

        return view('s_10_user_databases.edit')->with('s10UserDatabases', $s10UserDatabases);
    }

    public function update($id, Updates_10_user_databasesRequest $request)
    {
        $s10UserDatabases = $this->s10UserDatabasesRepository->find($id);

        if (empty($s10UserDatabases)) {
            Flash::error('S 10 User Databases not found');

            return redirect(route('s10UserDatabases.index'));
        }

        $s10UserDatabases = $this->s10UserDatabasesRepository->update($request->all(), $id);

        Flash::success('S 10 User Databases updated successfully.');

        return redirect(route('s10UserDatabases.index'));
    }

    public function destroy($id)
    {
        $s10UserDatabases = $this->s10UserDatabasesRepository->find($id);

        if (empty($s10UserDatabases)) {
            Flash::error('S 10 User Databases not found');

            return redirect(route('s10UserDatabases.index'));
        }

        $this->s10UserDatabasesRepository->delete($id);

        Flash::success('S 10 User Databases deleted successfully.');

        return redirect(route('s10UserDatabases.index'));
    }
}
