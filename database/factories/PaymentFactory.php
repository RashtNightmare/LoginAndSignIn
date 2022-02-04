<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
  
   /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Payment::class;
    public function definition()
    {
        //`reference_id`, `credit_card_number`, `amount`, `status`, `test_id`, `user_id`, `created_at`, `updated_at` 
        $date_create_update = $this->faker->dateTimeBetween('-2 day' ,'-1 day');
        return [
            'reference_id'=> $this->faker->numberBetween(1,3),
            'credit_card_number'=> $this->faker->numberBetween(1111111111111111,99999999999999999),
            'amount'=> $this->faker->numberBetween(1000,100000),
            'status'=> $this->faker->numberBetween(1,3),
            'test_id'=> $this->faker->numberBetween(1,3),
            'user_id'=> $this->faker->numberBetween(1,3),
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update

        ];
    }
}
