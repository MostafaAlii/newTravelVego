<?php
namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class ProductTableSeeder extends Seeder {
    public function run() {
        DB::table('products')->delete();
        Product::factory()->count(250)->create();
    }
}
