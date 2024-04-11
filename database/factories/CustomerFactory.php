<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Customer;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name'              => $this->faker->unique()->name(),
            'cpf'               => Str::random(11),
            'photo'             => $this->faker->unique()->url(),
            'gender'            => $this->faker->unique()->name(),

            // Address
            'zip_code'          => $this->faker->unique()->name(),
            'address'           => $this->faker->unique()->name(),
            'number'            => 19,
            'complement'        => $this->faker->unique()->name(),
            'neighborhood'      => $this->faker->unique()->name(),
            'city'              => $this->faker->unique()->name(),
            'state'             => $this->faker->unique()->name()

        ]; // return
    }

} // CustomerFactory
