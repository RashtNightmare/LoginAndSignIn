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
         $test=[
            [1,1,1,20,10000,'title1',1,1,'1400/11/26',10,'12:10'],
            [2,2,2,20,20000,'title2',2,2,'1400/11/27',20,'13:30'],
            [3,3,3,20,30000,'title3',3,3,'1400/11/28',30,'14:40']];
            for($i=0;$i < count($test);$i++){
                $j=0;
                 Test::query()->create([
                     'student_id'=> $test[$i][$j],
                     'teacher_id'=> $test[$i][$j+1],
                     'score'=> $test[$i][$j+2],
                     'acceptance_quorum'=> $test[$i][$j+3],
                     'amount'=> $test[$i][$j+4],
                     'title'=> $test[$i][$j+5],
                     'major_id'=> $test[$i][$j+6],
                     'lesson_id'=> $test[$i][$j+7],
                     'date'=> $test[$i][$j+8],
                     'duration'=> $test[$i][$j+9],
                     'start_time'=> $test[$i][$j+10],
                    ]); 
         }
         Test::factory()->count(1)->create();
 
    }
 }
 