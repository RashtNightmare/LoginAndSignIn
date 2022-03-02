<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class User_RoleFactory extends Factory
{
      /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\User_role::class;
    public function definition()
    {
        //`id`, `name`, `created_at`, `updated_at`
        $date_create_update = $this->faker->dateTimeBetween('-2 day' ,'-1 day');
        return [
            'name'=> $this->faker->name,
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update

        ];
    }
}
