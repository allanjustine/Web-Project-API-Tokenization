<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Students::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Firstname' => $this->faker->word,
        'Middlename' => $this->faker->word,
        'Lastname' => $this->faker->word,
        'Birthdate' => $this->faker->word,
        'Gender' => $this->faker->word,
        'Address' => $this->faker->word,
        'Citizenship' => $this->faker->word,
        'Religion' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
