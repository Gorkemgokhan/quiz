<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Seeders\soruSeeder;


class soruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->sentence(rand(3,6)),"description"=>$this->faker->text(190)
        ];
    }
}
