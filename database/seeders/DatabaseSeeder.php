<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            AdminTableSeeder::class,
            GroupTableSeeder::class,
            //CategoryTableSeeder::class,
            CountryTableSeeder::class,
            ProvienceTableSeeder::class,
            CityTableSeeder::class,
            AreaTableSeeder::class,
            SectionTableSeeder::class,
            CurrencyTableSeeder::class,
            SupplierTableSeeder::class,
            ImageTableSeeder::class,
            AppointmentTableSeeder::class,
            ServpriveTableSeeder::class,
            CancelTermTableSeeder::class,
            PrivacyTermTableSeeder::class,
            ProductTableSeeder::class,
        ]);
    }
}
