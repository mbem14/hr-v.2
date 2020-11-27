<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmergencyContactRequest;
use App\Http\Requests\StoreEmergencyContactRequest;
use App\Http\Requests\UpdateEmergencyContactRequest;
use App\Models\EmergencyContact;
use App\Models\Employee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmergencyContactsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('emergency_contact_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $emergencyContacts = EmergencyContact::all();

        return view('admin.emergencyContacts.index', compact('emergencyContacts'));
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

        $emergencyContact->load('employee');

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

        $emergencyContact->load('employee');

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
