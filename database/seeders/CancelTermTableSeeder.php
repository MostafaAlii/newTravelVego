<?php
namespace Database\Seeders;
use App\Models\Cancelterm;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CancelTermTableSeeder extends Seeder {
    public function run() {
        DB::table('cancelterms')->delete();
        Cancelterm::factory()->count(20)->create();
    }
}
