<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creates_40_table_typesRequest;
use App\Http\Requests\Updates_40_table_typesRequest;
use App\Repositories\s_40_table_typesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class s_40_table_typesController extends AppBaseController
{

    private $s40TableTypesRepository;

    public function __construct(s_40_table_typesRepository $s40TableTypesRepo)
    {
        $this->s40TableTypesRepository = $s40TableTypesRepo;
    }

    public function index(Request $request)
    {
        $s40TableTypes = $this->s40TableTypesRepository->all();

        return view('s_40_table_types.index')
            ->with('s40TableTypes', $s40TableTypes);
    }

    public function create()
    {
        return view('s_40_table_types.create');
    }

    public function store(Creates_40_table_typesRequest $request)
    {
        $input = $request->all();

        $s40TableTypes = $this->s40TableTypesRepository->create($input);

        Flash::success('S 40 Table Types saved successfully.');

        return redirect(route('s40TableTypes.index'));
    }

    public function show($id)
    {
        $s40TableTypes = $this->s40TableTypesRepository->find($id);

        if (empty($s40TableTypes)) {
            Flash::error('S 40 Table Types not found');

            return redirect(route('s40TableTypes.index'));
        }

        return view('s_40_table_types.show')->with('s40TableTypes', $s40TableTypes);
    }

    public function edit($id)
    {
        $s40TableTypes = $this->s40TableTypesRepository->find($id);

        if (empty($s40TableTypes)) {
            Flash::error('S 40 Table Types not found');

            return redirect(route('s40TableTypes.index'));
        }

        return view('s_40_table_types.edit')->with('s40TableTypes', $s40TableTypes);
    }

    public function update($id, Updates_40_table_typesRequest $request)
    {
        $s40TableTypes = $this->s40TableTypesRepository->find($id);

        if (empty($s40TableTypes)) {
            Flash::error('S 40 Table Types not found');

            return redirect(route('s40TableTypes.index'));
        }

        $s40TableTypes = $this->s40TableTypesRepository->update($request->all(), $id);

        Flash::success('S 40 Table Types updated successfully.');

        return redirect(route('s40TableTypes.index'));
    }

    public function destroy($id)
    {
        $s40TableTypes = $this->s40TableTypesRepository->find($id);

        if (empty($s40TableTypes)) {
            Flash::error('S 40 Table Types not found');

            return redirect(route('s40TableTypes.index'));
        }

        $this->s40TableTypesRepository->delete($id);

        Flash::success('S 40 Table Types deleted successfully.');

        return redirect(route('s40TableTypes.index'));
    }
}
