<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'job_title' => $this->faker->jobTitle,
            'salary' => $this->faker->numberBetween(30000, 80000),
            'department' => $this->faker->randomElement(['Sales', 'Marketing', 'IT']),
            'joined_date' => $this->faker->date('Y-m-d', 'now')
        ];
    }
}
