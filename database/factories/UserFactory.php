<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * Class UserFactory
 */
class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * @var int
     */
    private static $order = 1;

    /**
     * Define the model's default state.
     *
     * @return array
     *
     * @throws \Exception
     */
    public function definition()
    {
        $randomDate = $this->faker->dateTimeBetween('-1 year', '+1 day');

        return [
            'name' => $this->faker->name(),
            'active' => (bool) random_int(0, 1),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => $this->faker->dateTimeBetween($randomDate,now()),
            'success_rate' => random_int(0, 100),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'sort' => self::$order++,
            'created_at' => $randomDate,
            'updated_at' => $randomDate

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
