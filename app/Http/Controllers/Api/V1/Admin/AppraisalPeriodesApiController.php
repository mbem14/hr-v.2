<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppraisalPeriodeRequest;
use App\Http\Requests\UpdateAppraisalPeriodeRequest;
use App\Http\Resources\Admin\AppraisalPeriodeResource;
use App\Models\AppraisalPeriode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AppraisalPeriodesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('appraisal_periode_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AppraisalPeriodeResource(AppraisalPeriode::all());
    }

    public function store(StoreAppraisalPeriodeRequest $request)
    {
        $appraisalPeriode = AppraisalPeriode::create($request->all());

        return (new AppraisalPeriodeResource($appraisalPeriode))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AppraisalPeriode $appraisalPeriode)
    {
        abort_if(Gate::denies('appraisal_periode_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AppraisalPeriodeResource($appraisalPeriode);
    }

    public function update(UpdateAppraisalPeriodeRequest $request, AppraisalPeriode $appraisalPeriode)
    {
        $appraisalPeriode->update($request->all());

        return (new AppraisalPeriodeResource($appraisalPeriode))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AppraisalPeriode $appraisalPeriode)
    {
        abort_if(Gate::denies('appraisal_periode_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appraisalPeriode->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
