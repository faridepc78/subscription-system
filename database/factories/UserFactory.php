<?php

namespace Database\Factories;

use App\Enums\User\UserRoleEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => 12345678,
            'role' => UserRoleEnum::USER->value,
        ];
    }
}
