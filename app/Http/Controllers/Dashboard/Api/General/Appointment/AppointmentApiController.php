<?php
namespace App\Http\Controllers\Dashboard\Api\General\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Resources\General\AppointmentsResource;
use App\Models\Appointment;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
class AppointmentApiController extends Controller {
    use GeneralApiTrait;
    public function getAppointments() {
        $appointments = Appointment::select('id')->get();
        if ($appointments->count() > 0) {
            $appointmentsResource = AppointmentsResource::collection($appointments);
            return $this->returnData('appointments', $appointmentsResource, __('api/errors_msg.get_appointments_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.appointments_not_found'));
        }
    }
}
