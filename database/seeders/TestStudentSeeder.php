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
          $user=[
            [1,1,1,true,true,false],
            [2,2,2,true,true,false],
            [3,3,3,true,true,false]];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 TestSTudent::query()->create([
                     'user_id'=> $user[$i][$j],
                     'test_id'=> $user[$i][$j]+1,
                     'score'=> $user[$i][$j]+2,
                     'status'=> $user[$i][$j]+3,
                     'paid'=> $user[$i][$j]+4,
                     'canceled'=> $user[$i][$j]+5,
                    ]); 
         }
         TestSTudent::factory()->count(1)->create();
 
    }
 }
 