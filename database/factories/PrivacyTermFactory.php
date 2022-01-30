<?php
namespace Database\Factories;
use App\Models\Admin;
use App\Models\Privacyterm;
use Illuminate\Database\Eloquent\Factories\Factory;
class PrivacyTermFactory extends Factory
{
    protected $model = Privacyterm::class;
    public function definition()
    {
        return [
            'name'                  =>      $this->faker->text,
            'created_by'                =>      Admin::all()->random()->name,
        ];
    }
}
