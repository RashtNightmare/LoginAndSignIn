<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
   /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Question::class;
    public function definition()
    {
        //`id`, `text`, `option1`, `option2`, `option3`, `option4`, `true_answer`, `test_id`, `created_at`, `updated_at` 
        $date_create_update = $this->faker->dateTimeBetween('-2 day' ,'-1 day');
        $option1="option1" . $this->faker->text;
        $option2="option2" . $this->faker->text;
        $option3="option3" . $this->faker->text;
        $option4="option4" . $this->faker->text;
        $textQuestion="text" . $this->faker->text;
        return [
            'text'=> $textQuestion,
            'option1'=> $option1,
            'option2'=> $option2,
            'option3'=> $option3,
            'option4'=> $option4,
            'true_answer'=> $this->faker->numberBetween(1,4),
            'test_id'=> $this->faker->numberBetween(1,3),
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update

        ];
    }
}
