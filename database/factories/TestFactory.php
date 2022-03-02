<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Test::class;
    public function definition()
    {
        //`id`, `student_id`, `teacher_id`, `score`, `acceptance_quorum`, `amount`, `title`, `major_id`,
        // `lesson_id`, `date`, `duration`, `start_time`, `created_at`, `updated_at`
        $date_create_update = $this->faker->dateTimeBetween('-2 day' ,'-1 day');
        $years=(string)$this->faker->numberBetween(1400,1401);
        $months=(string)$this->faker->numberBetween(1,12);
        $days=(string)$this->faker->numberBetween(1,30);
        $date=$years.'/'.$months.'/'.$days;

        $hour=(string) $this->faker->numberBetween(1,24);
        $minute=(string) $this->faker->numberBetween(1,59);

        $start_time=$hour.":".$minute;
        $title="Title " . $this->faker->text;
        return [
            'student_id'=> $this->faker->numberBetween(1,4),
            'teacher_id'=> $this->faker->numberBetween(1,4),
            'score'=> $this->faker->numberBetween(1,20),
            'acceptance_quorum'=> $this->faker->numberBetween(17,20),
            'amount'=> $this->faker->numberBetween(1000,100000),
            'title'=> $title,
            'major_id'=> $this->faker->numberBetween(1,4),
            'lesson_id'=> $this->faker->numberBetween(1,4),
            'date'=> $date,
            'duration'=> $this->faker->numberBetween(30,180),
            'start_time'=> $start_time,
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update

        ];
    }
}
