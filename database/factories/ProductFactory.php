<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->domainWord(),
            'quantity' => $this->faker->numberBetween($min = 90, $max = 150),
            'price' => $this->faker->numberBetween($min = 1000, $max = 5000),
            'invoice_id' => $this->faker->numberBetween($min = 1, $max = 50),
        ];
    }
}
