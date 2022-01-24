<?php
namespace Database\Factories;
use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;
class CurrencyFactory extends Factory
{
    protected $model = Currency::class;
    public function definition()
    {
        return [
            'name'                      =>      $this->faker->creditCardType,
            'currency_symbol'           =>      $this->faker->randomLetter,
            'created_by'                =>      'MostafaAli',
            'updated_by'                =>      'MostafaAli',
        ];
    }
}
