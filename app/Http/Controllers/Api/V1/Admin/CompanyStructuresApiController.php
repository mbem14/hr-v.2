<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyStructureRequest;
use App\Http\Requests\UpdateCompanyStructureRequest;
use App\Http\Resources\Admin\CompanyStructureResource;
use App\Models\CompanyStructure;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyStructuresApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('company_structure_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CompanyStructureResource(CompanyStructure::with(['parent'])->get());
    }

    public function store(StoreCompanyStructureRequest $request)
    {
        $companyStructure = CompanyStructure::create($request->all());

        return (new CompanyStructureResource($companyStructure))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CompanyStructure $companyStructure)
    {
        abort_if(Gate::denies('company_structure_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CompanyStructureResource($companyStructure->load(['parent']));
    }

    public function update(UpdateCompanyStructureRequest $request, CompanyStructure $companyStructure)
    {
        $companyStructure->update($request->all());

        return (new CompanyStructureResource($companyStructure))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CompanyStructure $companyStructure)
    {
        abort_if(Gate::denies('company_structure_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companyStructure->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
