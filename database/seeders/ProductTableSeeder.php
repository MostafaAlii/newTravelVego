<?php
namespace Database\Seeders;
use App\Models\Appointment;
use App\Models\Servprice;
use App\Models\Cancelterm;
use App\Models\Privacyterm;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class ProductTableSeeder extends Seeder {
    public function run() {
        DB::table('products')->delete();
        Product::factory()->count(250)->create();
        $Appointments = Appointment::all();
        $ServicePrice = Servprice::all();
        $CancelTerm = Cancelterm::all();
        $PrivacyTerm = Privacyterm::all();
        Product::all()->each(function ($product) use ($Appointments) {
            $product->productAppointments()->attach(
                $Appointments->random(rand(1,8))->pluck('id')->toArray()
            );
        });
        Product::all()->each(function ($product) use ($ServicePrice) {
            $product->productServicePrices()->attach(
                $ServicePrice->random()->pluck('id')->toArray()
            );
        });
        Product::all()->each(function ($product) use ($CancelTerm) {
            $product->productCancelTerms()->attach(
                $CancelTerm->random()->pluck('id')->toArray()
            );
        });
        Product::all()->each(function ($product) use ($PrivacyTerm) {
            $product->productPrivacyTerms()->attach(
                $PrivacyTerm->random()->pluck('id')->toArray()
            );
        });
    }
}