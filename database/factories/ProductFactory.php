<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\{

    Product,
    Customer

}; // Model

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'customer_id'       => Customer::factory(),

            'name'              => $this->faker->unique()->name(),
            'price'             => '19.99',
            'photo'             => $this->faker->unique()->url()

        ]; // return

    } // definition

} // ProductFactory
