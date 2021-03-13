<?php

namespace Database\Factories;

use App\Models\Issue;
use Illuminate\Database\Eloquent\Factories\Factory;

class IssueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Issue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomLetter,
            'description' => $this->faker->randomLetter,
            'closed' => false,
            'project_id' => random_int(1, 2),
            'status_id' => 1
        ];
    }
}
