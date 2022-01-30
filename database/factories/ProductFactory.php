<?php
namespace Database\Factories;
use App\Models\Supplier;
use App\Models\Section;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
class ProductFactory extends Factory {
    protected $model = Product::class;
    public function definition() {
        return [
            'supplier_id'                   =>      Supplier::all()->random()->id,
            'section_id'                    =>      Section::all()->random()->id,
            'product_name'                  =>      $this->faker->name,
            'avaliable_lang'                =>      $this->faker->text,
            'description'                   =>      $this->faker->paragraph,
            'status'                        =>      $this->faker->boolean(),
        ];
    }
}
