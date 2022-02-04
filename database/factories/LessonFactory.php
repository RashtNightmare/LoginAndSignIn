<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Lesson::class;
    public function definition()
    {
        // `id`, `name`, `major_id`, `created_at`, `updated_at`    
        $date_create_update = $this->faker->dateTimeBetween('-2 day' ,'-1 day');
        return [
            'name'=> $this->faker->name,
            'major_id'=> $this->faker->numberBetween(1,3),
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update

        ];
    }
}
