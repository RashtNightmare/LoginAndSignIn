<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BalanceFactory extends Factory
{
  /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Balance::class;
    public function definition()
    {
        //'user_id','test_id','score','status','paid','canceled'
        $date_create_update = $this->faker->dateTimeBetween('-2 day' ,'-1 day');
        return [
            'user_id'=> $this->faker->numberBetween(1,3),
            'amount'=>  $this->faker->numberBetween(10000,100000),
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update

        ];
    }
}
