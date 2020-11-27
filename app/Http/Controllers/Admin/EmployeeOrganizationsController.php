<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmployeeOrganizationRequest;
use App\Http\Requests\StoreEmployeeOrganizationRequest;
use App\Http\Requests\UpdateEmployeeOrganizationRequest;
use App\Models\EmployeeOrganization;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeOrganizationsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_organization_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeOrganization::with(['created_by'])->select(sprintf('%s.*', (new EmployeeOrganization)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_organization_show';
                $editGate      = 'employee_organization_edit';
                $deleteGate    = 'employee_organization_delete';
                $crudRoutePart = 'employee-organizations';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('role', function ($row) {
                return $row->role ? $row->role : "";
            });
            $table->editColumn('notes', function ($row) {
                return $row->notes ? $row->notes : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.employeeOrganizations.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_organization_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employeeOrganizations.create');
    }

    public function store(StoreEmployeeOrganizationRequest $request)
    {
        $employeeOrganization = EmployeeOrganization::create($request->all());

        return redirect()->route('admin.employee-organizations.index');
    }

    public function edit(EmployeeOrganization $employeeOrganization)
    {
        abort_if(Gate::denies('employee_organization_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeOrganization->load('created_by');

        return view('admin.employeeOrganizations.edit', compact('employeeOrganization'));
    }

    public function update(UpdateEmployeeOrganizationRequest $request, EmployeeOrganization $employeeOrganization)
    {
        $employeeOrganization->update($request->all());

        return redirect()->route('admin.employee-organizations.index');
    }

    public function show(EmployeeOrganization $employeeOrganization)
    {
        abort_if(Gate::denies('employee_organization_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeOrganization->load('created_by');

        return view('admin.employeeOrganizations.show', compact('employeeOrganization'));
    }

    public function destroy(EmployeeOrganization $employeeOrganization)
    {
        abort_if(Gate::denies('employee_organization_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeOrganization->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeOrganizationRequest $request)
    {
        EmployeeOrganization::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
