<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //`id`, `name`, `major_id`, `created_at`, `updated_at`
         $user=[
            ['NameLesson1',1],
            ['NameLesson2',2],
            ['NameLesson3',3]];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 Lesson::query()->create([
                     'name'=> $user[$i][$j]
                     ,'major_id'=>$user[$i][$j+1]
                    ]); 
         }
         Lesson::factory()->count(1)->create();

    }
}
