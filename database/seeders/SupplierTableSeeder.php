<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class SupplierTableSeeder extends Seeder {
    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('suppliers')->truncate();
        Supplier::factory()->count(25)->create();
        Schema::enableForeignKeyConstraints();
    }
}
