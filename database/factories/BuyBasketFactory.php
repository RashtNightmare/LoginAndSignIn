<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BuyBasketFactory extends Factory
{
   /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\BuyBasket::class;
    public function definition()
    {
        // `id`, `amount`, `status`, `test_id`, `user_id`, `created_at`, `updated_at`      
        $date_create_update = $this->faker->dateTimeBetween('-2 day' ,'-1 day');
        return [
            'amount'=> $this->faker->numberBetween(10000,100000),
            'status'=> $this->faker->numberBetween(1,3),
            'test_id'=> $this->faker->numberBetween(1,3),
            'user_id'=> $this->faker->numberBetween(1,3),
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update

        ];
    }
}
