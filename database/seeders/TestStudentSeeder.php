<?php

namespace Database\Seeders;

use App\Models\TestSTudent;
use Illuminate\Database\Seeder;

class TestStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //`id`, `user_id`, `test_id`, `score`, `status`, `paid`, `canceled`, `created_at`, `updated_at`
          $test_student=[
            [1,1,1,true,true,false],
            [2,2,2,true,true,false],
            [3,3,3,true,true,false]];
            for($i=0;$i < count($test_student);$i++){
                $j=0;
                 TestSTudent::query()->create([
                     'user_id'=> $test_student[$i][$j],
                     'test_id'=> $test_student[$i][$j+1],
                     'score'=> $test_student[$i][$j+2],
                     'status'=> $test_student[$i][$j+3],
                     'paid'=> $test_student[$i][$j+4],
                     'canceled'=> $test_student[$i][$j+5],
                    ]); 
         }
         TestSTudent::factory()->count(1)->create();
 
    }
 }
 