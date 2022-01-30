<?php
namespace Database\Factories;
use App\Models\Admin;
use App\Models\Cancelterm;
use Illuminate\Database\Eloquent\Factories\Factory;
class CancelTermFactory extends Factory
{
    protected $model = Cancelterm::class;
    public function definition()
    {
        return [
            'name'                  =>      $this->faker->text,
            'created_by'                =>      Admin::all()->random()->name,
        ];
    }
}
