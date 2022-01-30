<?php
namespace Database\Seeders;
use App\Models\Servprice;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class ServpriveTableSeeder extends Seeder {
    public function run() {
        DB::table('servprices')->delete();
        Servprice::factory()->count(35)->create();
    }
}
