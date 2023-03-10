<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'companyname'=>$this-> faker->company,
            'email'=>$this-> faker->email,
            'address'=>$this-> faker->address,
            'country'=>$this-> faker->country

        ];
    }
}
