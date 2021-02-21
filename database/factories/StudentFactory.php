<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => Str::random(10),
            'cep' => Str::random(10),
            'number' => Str::random(10),
            'complement' => $this->faker->text(5),
            'street' => $this->faker->text(5),
            'barrio' => $this->faker->text(5) ,
            'sex' => $this->faker->text(5),
            'status' => 1,
        ];
    }
}
