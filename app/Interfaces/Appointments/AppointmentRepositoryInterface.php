<?php
namespace App\Interfaces\Appointments;
interface AppointmentRepositoryInterface {
    public function index();
    public function store($request);
    public function update($request);
    public function destroy($request);
}