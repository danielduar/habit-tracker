<?php

namespace Database\Factories;

use App\Models\Habit;
use App\Models\HabitLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabitLogFactory extends Factory
{
    protected $model = HabitLog::class;

    public function definition(): array
    {
        return [
            "user_id" => "1",
            "habit_id" => Habit::query()->inRandomOrder()->first()->id,
            "completed_at" => $this->faker->unique()->dateTimeBetween('-30 days', 'now')->format('Y-m-d'),
        ];
    }
}
