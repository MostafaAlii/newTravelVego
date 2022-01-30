<?php
namespace Database\Factories;
use App\Models\Servprice;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
class ServpriceFactory extends Factory
{
    protected $model = Servprice::class;
    public function definition()
    {
        return [
            'name'                  =>      $this->faker->name,
            'status'                        =>      $this->faker->boolean(),
            'created_by'                =>      Admin::all()->random()->name,
        ];
    }
}
