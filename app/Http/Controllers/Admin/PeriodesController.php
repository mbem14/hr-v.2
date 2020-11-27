<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPeriodeRequest;
use App\Http\Requests\StorePeriodeRequest;
use App\Http\Requests\UpdatePeriodeRequest;
use App\Models\Periode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PeriodesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('periode_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $periodes = Periode::all();

        return view('admin.periodes.index', compact('periodes'));
    }

    public function create()
    {
        abort_if(Gate::denies('periode_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.periodes.create');
    }

    public function store(StorePeriodeRequest $request)
    {
        $periode = Periode::create($request->all());

        return redirect()->route('admin.periodes.index');
    }

    public function edit(Periode $periode)
    {
        abort_if(Gate::denies('periode_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.periodes.edit', compact('periode'));
    }

    public function update(UpdatePeriodeRequest $request, Periode $periode)
    {
        $periode->update($request->all());

        return redirect()->route('admin.periodes.index');
    }

    public function show(Periode $periode)
    {
        abort_if(Gate::denies('periode_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.periodes.show', compact('periode'));
    }

    public function destroy(Periode $periode)
    {
        abort_if(Gate::denies('periode_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $periode->delete();

        return back();
    }

    public function massDestroy(MassDestroyPeriodeRequest $request)
    {
        Periode::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
