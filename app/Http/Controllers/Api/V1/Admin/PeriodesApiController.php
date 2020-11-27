<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePeriodeRequest;
use App\Http\Requests\UpdatePeriodeRequest;
use App\Http\Resources\Admin\PeriodeResource;
use App\Models\Periode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PeriodesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('periode_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PeriodeResource(Periode::all());
    }

    public function store(StorePeriodeRequest $request)
    {
        $periode = Periode::create($request->all());

        return (new PeriodeResource($periode))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Periode $periode)
    {
        abort_if(Gate::denies('periode_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PeriodeResource($periode);
    }

    public function update(UpdatePeriodeRequest $request, Periode $periode)
    {
        $periode->update($request->all());

        return (new PeriodeResource($periode))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Periode $periode)
    {
        abort_if(Gate::denies('periode_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $periode->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
