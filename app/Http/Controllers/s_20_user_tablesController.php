<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creates_20_user_tablesRequest;
use App\Http\Requests\Updates_20_user_tablesRequest;
use App\Repositories\s_20_user_tablesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class s_20_user_tablesController extends AppBaseController
{

    private $s20UserTablesRepository;

    public function __construct(s_20_user_tablesRepository $s20UserTablesRepo)
    {
        $this->s20UserTablesRepository = $s20UserTablesRepo;
    }

    public function index(Request $request)
    {
        $s20UserTables = $this->s20UserTablesRepository->all();

        return view('s_20_user_tables.index')
            ->with('s20UserTables', $s20UserTables);
    }

    public function create()
    {
        return view('s_20_user_tables.create');
    }

    public function store(Creates_20_user_tablesRequest $request)
    {
        $input = $request->all();

        $s20UserTables = $this->s20UserTablesRepository->create($input);

        Flash::success('S 20 User Tables saved successfully.');

        return redirect(route('s20UserTables.index'));
    }

    public function show($id)
    {
        $s20UserTables = $this->s20UserTablesRepository->find($id);

        if (empty($s20UserTables)) {
            Flash::error('S 20 User Tables not found');

            return redirect(route('s20UserTables.index'));
        }

        return view('s_20_user_tables.show')->with('s20UserTables', $s20UserTables);
    }

    public function edit($id)
    {
        $s20UserTables = $this->s20UserTablesRepository->find($id);

        if (empty($s20UserTables)) {
            Flash::error('S 20 User Tables not found');

            return redirect(route('s20UserTables.index'));
        }

        return view('s_20_user_tables.edit')->with('s20UserTables', $s20UserTables);
    }

    public function update($id, Updates_20_user_tablesRequest $request)
    {
        $s20UserTables = $this->s20UserTablesRepository->find($id);

        if (empty($s20UserTables)) {
            Flash::error('S 20 User Tables not found');

            return redirect(route('s20UserTables.index'));
        }

        $s20UserTables = $this->s20UserTablesRepository->update($request->all(), $id);

        Flash::success('S 20 User Tables updated successfully.');

        return redirect(route('s20UserTables.index'));
    }

    public function destroy($id)
    {
        $s20UserTables = $this->s20UserTablesRepository->find($id);

        if (empty($s20UserTables)) {
            Flash::error('S 20 User Tables not found');

            return redirect(route('s20UserTables.index'));
        }

        $this->s20UserTablesRepository->delete($id);

        Flash::success('S 20 User Tables deleted successfully.');

        return redirect(route('s20UserTables.index'));
    }
}
