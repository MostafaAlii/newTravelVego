<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\Appointments\AppointmentRepositoryInterface;
use App\Http\Requests\Dashboard\AppointmentRequest;
use Illuminate\Http\Request;
class AppointmentController extends Controller {
    protected $Appointment;
    public function __construct(AppointmentRepositoryInterface $Appointment) {
        $this->Appointment = $Appointment;
    }
    public function index() {
        return $this->Appointment->index();
    }

    public function store(AppointmentRequest $request) {
        return $this->Appointment->store($request);
    }

    public function update(Request $request) {
        return $this->Appointment->update($request);
    }

    public function destroy(Request $request) {
        return $this->Appointment->destroy($request);
    }
}
