<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCompanyStructureRequest;
use App\Http\Requests\StoreCompanyStructureRequest;
use App\Http\Requests\UpdateCompanyStructureRequest;
use App\Models\CompanyStructure;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CompanyStructuresController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('company_structure_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CompanyStructure::with(['parent'])->select(sprintf('%s.*', (new CompanyStructure)->table))->get();
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'company_structure_show';
                $editGate      = 'company_structure_edit';
                $deleteGate    = 'company_structure_delete';
                $crudRoutePart = 'company-structures';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : "";
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });
            $table->editColumn('type', function ($row) {
                return $row->type ? CompanyStructure::TYPE_SELECT[$row->type] : '';
            });
            $table->addColumn('parent_title', function ($row) {
                return $row->parent ? $row->parent->title : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'parent']);

            return $table->make(true);
        }

        $company_structures = CompanyStructure::get();

        return view('admin.companyStructures.index', compact('company_structures'));
    }

    public function create()
    {
        abort_if(Gate::denies('company_structure_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parents = CompanyStructure::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.companyStructures.create', compact('parents'));
    }

    public function store(StoreCompanyStructureRequest $request)
    {
        $companyStructure = CompanyStructure::create($request->all());

        return redirect()->route('admin.company-structures.index');
    }

    public function edit(CompanyStructure $companyStructure)
    {
        abort_if(Gate::denies('company_structure_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parents = CompanyStructure::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $companyStructure->load('parent');

        return view('admin.companyStructures.edit', compact('parents', 'companyStructure'));
    }

    public function update(UpdateCompanyStructureRequest $request, CompanyStructure $companyStructure)
    {
        $companyStructure->update($request->all());

        return redirect()->route('admin.company-structures.index');
    }

    public function show(CompanyStructure $companyStructure)
    {
        abort_if(Gate::denies('company_structure_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companyStructure->load('parent');

        return view('admin.companyStructures.show', compact('companyStructure'));
    }

    public function destroy(CompanyStructure $companyStructure)
    {
        abort_if(Gate::denies('company_structure_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companyStructure->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompanyStructureRequest $request)
    {
        CompanyStructure::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
