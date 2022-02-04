<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //`id`, `text`, `option1`, `option2`, `option3`, `option4`, `true_answer`, `test_id`, `created_at`, `updated_at`
        $user=[
            ['text1','option1','option2','option3','option4',1,1],
            ['text2','option1','option2','option3','option4',2,2],
            ['text3','option1','option2','option3','option4',3,3]];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 Question::query()->create([
                     'text1'=> $user[$i][$j],
                     'option1'=> $user[$i][$j]+1,
                     'option2'=> $user[$i][$j]+2,
                     'option3'=> $user[$i][$j]+3,
                     'option4'=> $user[$i][$j]+4,
                     'true_answer'=> $user[$i][$j]+5,
                     'test_id'=> $user[$i][$j]+6
                    ]); 
         }
         Question::factory()->count(1)->create();
 
    }
 }
 