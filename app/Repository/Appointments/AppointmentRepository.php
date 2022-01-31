<?php
namespace App\Repository\Appointments;
use App\Models\Appointment;
use App\Interfaces\Appointments\AppointmentRepositoryInterface;
class AppointmentRepository implements AppointmentRepositoryInterface {
    public function index() {
        $Appointments = Appointment::all();
        return view('Dashboard.Appointments.index', compact('Appointments'));
    }

    public function store($request) {
        Appointment::firstOrCreate(
            ['name' =>  request('name')],
        );
        session()->flash('add');
        return redirect()->route('Appointments.index');
    }

    public function update($request) {
        $Appointment = Appointment::findOrFail($request->id);
        $Appointment->update([
            'name'  => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('Appointments.index');
    }

    public function destroy($request) {
        Appointment::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('Appointments.index');
    }
}