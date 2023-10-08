<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creates_60_column_typesRequest;
use App\Http\Requests\Updates_60_column_typesRequest;
use App\Repositories\s_60_column_typesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class s_60_column_typesController extends AppBaseController
{

    private $s60ColumnTypesRepository;

    public function __construct(s_60_column_typesRepository $s60ColumnTypesRepo)
    {
        $this->s60ColumnTypesRepository = $s60ColumnTypesRepo;
    }

    public function index(Request $request)
    {
        $s60ColumnTypes = $this->s60ColumnTypesRepository->all();

        return view('s_60_column_types.index')
            ->with('s60ColumnTypes', $s60ColumnTypes);
    }

    public function create()
    {
        return view('s_60_column_types.create');
    }

    public function store(Creates_60_column_typesRequest $request)
    {
        $input = $request->all();

        $s60ColumnTypes = $this->s60ColumnTypesRepository->create($input);

        Flash::success('S 60 Column Types saved successfully.');

        return redirect(route('s60ColumnTypes.index'));
    }

    public function show($id)
    {
        $s60ColumnTypes = $this->s60ColumnTypesRepository->find($id);

        if (empty($s60ColumnTypes)) {
            Flash::error('S 60 Column Types not found');

            return redirect(route('s60ColumnTypes.index'));
        }

        return view('s_60_column_types.show')->with('s60ColumnTypes', $s60ColumnTypes);
    }

    public function edit($id)
    {
        $s60ColumnTypes = $this->s60ColumnTypesRepository->find($id);

        if (empty($s60ColumnTypes)) {
            Flash::error('S 60 Column Types not found');

            return redirect(route('s60ColumnTypes.index'));
        }

        return view('s_60_column_types.edit')->with('s60ColumnTypes', $s60ColumnTypes);
    }

    public function update($id, Updates_60_column_typesRequest $request)
    {
        $s60ColumnTypes = $this->s60ColumnTypesRepository->find($id);

        if (empty($s60ColumnTypes)) {
            Flash::error('S 60 Column Types not found');

            return redirect(route('s60ColumnTypes.index'));
        }

        $s60ColumnTypes = $this->s60ColumnTypesRepository->update($request->all(), $id);

        Flash::success('S 60 Column Types updated successfully.');

        return redirect(route('s60ColumnTypes.index'));
    }

    public function destroy($id)
    {
        $s60ColumnTypes = $this->s60ColumnTypesRepository->find($id);

        if (empty($s60ColumnTypes)) {
            Flash::error('S 60 Column Types not found');

            return redirect(route('s60ColumnTypes.index'));
        }

        $this->s60ColumnTypesRepository->delete($id);

        Flash::success('S 60 Column Types deleted successfully.');

        return redirect(route('s60ColumnTypes.index'));
    }
}
