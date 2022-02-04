<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //`id`, `student_id`, `teacher_id`, `score`, `acceptance_quorum`, `amount`, `title`, `major_id`, `lesson_id`,
          //`date`, `duration`, `start_time`, `created_at`, `updated_at`
         $user=[
            [1,1,1,20,10000,'title1',1,1,'1400/11/26',10],
            [2,2,2,20,20000,'title2',2,2,'1400/11/27',20],
            [3,3,3,20,30000,'title3',3,3,'1400/11/28',30]];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 Test::query()->create([
                     'student_id'=> $user[$i][$j],
                     'teacher_id'=> $user[$i][$j]+1,
                     'score'=> $user[$i][$j]+2,
                     'acceptance_quorum'=> $user[$i][$j]+3,
                     'amount'=> $user[$i][$j]+4,
                     'title'=> $user[$i][$j]+5,
                     'major_id'=> $user[$i][$j]+6,
                     'lesson_id'=> $user[$i][$j]+7,
                     'date'=> $user[$i][$j]+8,
                     'duration'=> $user[$i][$j]+9,
                    ]); 
         }
         Test::factory()->count(1)->create();
 
    }
 }
 