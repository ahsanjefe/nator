<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creates_30_data_typesRequest;
use App\Http\Requests\Updates_30_data_typesRequest;
use App\Repositories\s_30_data_typesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class s_30_data_typesController extends AppBaseController
{

    private $s30DataTypesRepository;

    public function __construct(s_30_data_typesRepository $s30DataTypesRepo)
    {
        $this->s30DataTypesRepository = $s30DataTypesRepo;
    }

    public function index(Request $request)
    {
        $s30DataTypes = $this->s30DataTypesRepository->all();

        return view('s_30_data_types.index')
            ->with('s30DataTypes', $s30DataTypes);
    }

    public function create()
    {
        return view('s_30_data_types.create');
    }

    public function store(Creates_30_data_typesRequest $request)
    {
        $input = $request->all();

        $s30DataTypes = $this->s30DataTypesRepository->create($input);

        Flash::success('S 30 Data Types saved successfully.');

        return redirect(route('s30DataTypes.index'));
    }

    public function show($id)
    {
        $s30DataTypes = $this->s30DataTypesRepository->find($id);

        if (empty($s30DataTypes)) {
            Flash::error('S 30 Data Types not found');

            return redirect(route('s30DataTypes.index'));
        }

        return view('s_30_data_types.show')->with('s30DataTypes', $s30DataTypes);
    }

    public function edit($id)
    {
        $s30DataTypes = $this->s30DataTypesRepository->find($id);

        if (empty($s30DataTypes)) {
            Flash::error('S 30 Data Types not found');

            return redirect(route('s30DataTypes.index'));
        }

        return view('s_30_data_types.edit')->with('s30DataTypes', $s30DataTypes);
    }

    public function update($id, Updates_30_data_typesRequest $request)
    {
        $s30DataTypes = $this->s30DataTypesRepository->find($id);

        if (empty($s30DataTypes)) {
            Flash::error('S 30 Data Types not found');

            return redirect(route('s30DataTypes.index'));
        }

        $s30DataTypes = $this->s30DataTypesRepository->update($request->all(), $id);

        Flash::success('S 30 Data Types updated successfully.');

        return redirect(route('s30DataTypes.index'));
    }

    public function destroy($id)
    {
        $s30DataTypes = $this->s30DataTypesRepository->find($id);

        if (empty($s30DataTypes)) {
            Flash::error('S 30 Data Types not found');

            return redirect(route('s30DataTypes.index'));
        }

        $this->s30DataTypesRepository->delete($id);

        Flash::success('S 30 Data Types deleted successfully.');

        return redirect(route('s30DataTypes.index'));
    }
}
