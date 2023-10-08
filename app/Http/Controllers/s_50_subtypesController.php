<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creates_50_subtypesRequest;
use App\Http\Requests\Updates_50_subtypesRequest;
use App\Repositories\s_50_subtypesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class s_50_subtypesController extends AppBaseController
{

    private $s50SubtypesRepository;

    public function __construct(s_50_subtypesRepository $s50SubtypesRepo)
    {
        $this->s50SubtypesRepository = $s50SubtypesRepo;
    }

    public function index(Request $request)
    {
        $s50Subtypes = $this->s50SubtypesRepository->all();

        return view('s_50_subtypes.index')
            ->with('s50Subtypes', $s50Subtypes);
    }

    public function create()
    {
        return view('s_50_subtypes.create');
    }

    public function store(Creates_50_subtypesRequest $request)
    {
        $input = $request->all();

        $s50Subtypes = $this->s50SubtypesRepository->create($input);

        Flash::success('S 50 Subtypes saved successfully.');

        return redirect(route('s50Subtypes.index'));
    }

    public function show($id)
    {
        $s50Subtypes = $this->s50SubtypesRepository->find($id);

        if (empty($s50Subtypes)) {
            Flash::error('S 50 Subtypes not found');

            return redirect(route('s50Subtypes.index'));
        }

        return view('s_50_subtypes.show')->with('s50Subtypes', $s50Subtypes);
    }

    public function edit($id)
    {
        $s50Subtypes = $this->s50SubtypesRepository->find($id);

        if (empty($s50Subtypes)) {
            Flash::error('S 50 Subtypes not found');

            return redirect(route('s50Subtypes.index'));
        }

        return view('s_50_subtypes.edit')->with('s50Subtypes', $s50Subtypes);
    }

    public function update($id, Updates_50_subtypesRequest $request)
    {
        $s50Subtypes = $this->s50SubtypesRepository->find($id);

        if (empty($s50Subtypes)) {
            Flash::error('S 50 Subtypes not found');

            return redirect(route('s50Subtypes.index'));
        }

        $s50Subtypes = $this->s50SubtypesRepository->update($request->all(), $id);

        Flash::success('S 50 Subtypes updated successfully.');

        return redirect(route('s50Subtypes.index'));
    }

    public function destroy($id)
    {
        $s50Subtypes = $this->s50SubtypesRepository->find($id);

        if (empty($s50Subtypes)) {
            Flash::error('S 50 Subtypes not found');

            return redirect(route('s50Subtypes.index'));
        }

        $this->s50SubtypesRepository->delete($id);

        Flash::success('S 50 Subtypes deleted successfully.');

        return redirect(route('s50Subtypes.index'));
    }
}
