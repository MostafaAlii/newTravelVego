<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class ImageTableSeeder extends Seeder {
    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('images')->truncate();
        Image::factory()->count(25)->create();
        Schema::enableForeignKeyConstraints();
    }
}
