<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\PseudoTypes\True_;

class TestStudentFactory extends Factory
{
      /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\TestSTudent::class;
    public function definition()
    {
        //`id`, `user_id`, `test_id`, `score`, `status`, `paid`, `canceled`, `created_at`, `updated_at`
        $date_create_update = $this->faker->dateTimeBetween('-2 day' ,'-1 day');
        $cancel=$this->faker->numberBetween(1,2);
        $pay=$this->faker->numberBetween(1,2);
        $failedOrPassed=$this->faker->numberBetween(1,2);
        $canceled=null;   
        $paid=null;   
        $status="";
        if($cancel == 1){$canceled=True;}else{$canceled=False;}
        if($pay == 1){$paid=True;}else{$paid=False;}
        if($failedOrPassed == 1){$status=True;}else{$status=False;}
        
        return [
            'user_id'=> $this->faker->numberBetween(1,4),
            'test_id'=> $this->faker->numberBetween(1,4),
            'score'=> $this->faker->numberBetween(1,20),
            'status'=> $status,
            'paid'=> $paid,
            'canceled'=> $canceled,
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update

        ];
    }
}
