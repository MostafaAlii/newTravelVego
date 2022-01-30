<?php
namespace Database\Seeders;
use App\Models\Privacyterm;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PrivacyTermTableSeeder extends Seeder {
    public function run(){
        DB::table('privacyterms')->delete();
        Privacyterm::factory()->count(20)->create();
    }
}
