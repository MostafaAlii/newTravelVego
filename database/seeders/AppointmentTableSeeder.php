<?php
namespace Database\Seeders;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class AppointmentTableSeeder extends Seeder {
    public function run() {
        DB::table('appointments')->delete();
        $Appointments = [
            ['name'         =>          'كل يوم'],
            ['name'         =>          'السبت'],
            ['name'         =>          'الاحد'],
            ['name'         =>          'الاثنين'],
            ['name'         =>          'الثلاثاء'],
            ['name'         =>          'الاربعاء'],
            ['name'         =>          'الخميس'],
            ['name'         =>          'الجمعة'],
        ];
        foreach ($Appointments as $Appointment) {
            Appointment::create($Appointment);
        }
    }
}
