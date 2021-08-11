<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'type' =>  $this->faker->randomElement(['Ordinaria','Electrónica']),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'seller_id' => $this->faker->numberBetween($min = 1, $max = 50),
        ];
    }
}
