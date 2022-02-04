<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Null_;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\User::class;
    public function definition()
    {
        $date_email_mobile_create_update = $this->faker->dateTimeBetween('-2 day','-1 day' );
        // $date_delete = $this->faker->dateTimeBetween('+1 day' );

        $mobile="09". $this->faker->numberBetween(11111111111,99999999999);
        $user_name="User_".$this->faker->name;
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(), 
            'identity_card' =>$this->faker->numberBetween(111111111111111,9999999999999999),
            'national_code'=>$this->faker->unique()->numberBetween(1111111111,9999999999),
            'mobile'=> $mobile,
            'username'=>$user_name,
            'password'=> $this->faker->numberBetween(800,12000),
            'avatar'=> $this->faker->numberBetween(1,3),
            'role_id'=>$this->faker->numberBetween(1,3),
            'major_id'=>$this->faker->numberBetween(1,3),
            'mobile_verified_at'=>$date_email_mobile_create_update,
            'email_verified_at'=>$date_email_mobile_create_update,
            'remember_token'=> Null,
            'deleted_at'=>Null,
            'created_at'=>$date_email_mobile_create_update,
            'updated_at'=>$date_email_mobile_create_update

        ];
    }
}
