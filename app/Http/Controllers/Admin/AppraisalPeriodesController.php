<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAppraisalPeriodeRequest;
use App\Http\Requests\StoreAppraisalPeriodeRequest;
use App\Http\Requests\UpdateAppraisalPeriodeRequest;
use App\Models\AppraisalPeriode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AppraisalPeriodesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('appraisal_periode_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appraisalPeriodes = AppraisalPeriode::all();

        return view('admin.appraisalPeriodes.index', compact('appraisalPeriodes'));
    }

    public function create()
    {
        abort_if(Gate::denies('appraisal_periode_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.appraisalPeriodes.create');
    }

    public function store(StoreAppraisalPeriodeRequest $request)
    {
        $appraisalPeriode = AppraisalPeriode::create($request->all());

        return redirect()->route('admin.appraisal-periodes.index');
    }

    public function edit(AppraisalPeriode $appraisalPeriode)
    {
        abort_if(Gate::denies('appraisal_periode_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.appraisalPeriodes.edit', compact('appraisalPeriode'));
    }

    public function update(UpdateAppraisalPeriodeRequest $request, AppraisalPeriode $appraisalPeriode)
    {
        $appraisalPeriode->update($request->all());

        return redirect()->route('admin.appraisal-periodes.index');
    }

    public function show(AppraisalPeriode $appraisalPeriode)
    {
        abort_if(Gate::denies('appraisal_periode_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.appraisalPeriodes.show', compact('appraisalPeriode'));
    }

    public function destroy(AppraisalPeriode $appraisalPeriode)
    {
        abort_if(Gate::denies('appraisal_periode_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appraisalPeriode->delete();

        return back();
    }

    public function massDestroy(MassDestroyAppraisalPeriodeRequest $request)
    {
        AppraisalPeriode::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
