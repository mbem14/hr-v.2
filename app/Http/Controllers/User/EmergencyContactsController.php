<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmergencyContactRequest;
use App\Http\Requests\StoreEmergencyContactRequest;
use App\Http\Requests\UpdateEmergencyContactRequest;
use App\Models\EmergencyContact;
use App\Models\Employee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmergencyContactsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('emergency_contact_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmergencyContact::with(['employee', 'created_by'])->select(sprintf('%s.*', (new EmergencyContact)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'emergency_contact_show';
                $editGate      = 'emergency_contact_edit';
                $deleteGate    = 'emergency_contact_delete';
                $crudRoutePart = 'emergency-contacts';

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
            $table->addColumn('employee_employee_number', function ($row) {
                return $row->employee ? $row->employee->employee_number : '';
            });

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('relationship', function ($row) {
                return $row->relationship ? $row->relationship : "";
            });
            $table->editColumn('home_phone', function ($row) {
                return $row->home_phone ? $row->home_phone : "";
            });
            $table->editColumn('mobile_phone', function ($row) {
                return $row->mobile_phone ? $row->mobile_phone : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'employee']);

            return $table->make(true);
        }

        return view('admin.emergencyContacts.index');
    }

    public function create()
    {
        abort_if(Gate::denies('emergency_contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.emergencyContacts.create', compact('employees'));
    }

    public function store(StoreEmergencyContactRequest $request)
    {
        $emergencyContact = EmergencyContact::create($request->all());

        return redirect()->route('admin.emergency-contacts.index');
    }

    public function edit(EmergencyContact $emergencyContact)
    {
        abort_if(Gate::denies('emergency_contact_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all()->pluck('employee_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $emergencyContact->load('employee', 'created_by');

        return view('admin.emergencyContacts.edit', compact('employees', 'emergencyContact'));
    }

    public function update(UpdateEmergencyContactRequest $request, EmergencyContact $emergencyContact)
    {
        $emergencyContact->update($request->all());

        return redirect()->route('admin.emergency-contacts.index');
    }

    public function show(EmergencyContact $emergencyContact)
    {
        abort_if(Gate::denies('emergency_contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $emergencyContact->load('employee', 'created_by');

        return view('admin.emergencyContacts.show', compact('emergencyContact'));
    }

    public function destroy(EmergencyContact $emergencyContact)
    {
        abort_if(Gate::denies('emergency_contact_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $emergencyContact->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmergencyContactRequest $request)
    {
        EmergencyContact::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
