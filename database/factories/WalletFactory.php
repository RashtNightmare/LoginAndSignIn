<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WalletFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\TestSTudent::class;
    public function definition()
    {
        // `id`, `test_id`, `user_id`, `type`, `action`, `description`, `balance`, `deleted_at`, `created_at`, `updated_at
        $date_create_update = $this->faker->dateTimeBetween('-2 day' ,'-1 day');
        $type="Type "+ $this->faker->text;
        $action="Type "+ $this->faker->text;
        $description="Description "+ $this->faker->text;

        return [
            'test_id'=> $this->faker->numberBetween(1,4),
            'user_id'=> $this->faker->numberBetween(1,4),
            'type'=> $type,
            'action'=> $action,
            'description'=> $description,
            'balance'=> $this->faker->numberBetween(1,4),
            'deleted_at'=> null,
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update

        ];
    }
}
